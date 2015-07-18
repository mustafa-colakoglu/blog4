<?php
/**
	* msMVC
	* @package MSmvc
	* @author Mustafa Çolakoğlu
	* @since Version 1.0

//---------------------------------------------------------------------------

	* msMVC MSCache
	* @package msMVC
	* @subpackage libs
	* @author Mustafa Çolakoğlu
	
**/
	class MSCache extends MSCore{
		private $timer;
		private $getUrl;
		private $fileName;
		private $runCache;
		function __construct($url = false){
			parent::__construct();
			require APPLICATION_PATH."cache/config.php";
			if($this->url[0]){
				$this->getUrl = implode("/",$this->url);
			}
			else if($url){
				$this->getUrl = $url;
			}
			else{
				$this->getUrl = $this->welcomeController;
			}
			if(@$cacheConfigs[$this->getUrl] and @$cacheConfigs[$this->getUrl]["cache"]){
				$this->runCache=true;
				if(@$cacheConfigs[$this->getUrl]["timer"]){
					$this->timer = $cacheConfigs[$this->getUrl]["timer"];
					$this->fileName = APPLICATION_PATH."cache/MSCacheFiles/".md5($this->getUrl).".php";
				}
				else{
					$this->runCache=false;
				}
			}
			else{
				$this->runCache=false;
			}
		}
		function runCache(){
			if($this->runCache){
				if(file_exists($this->fileName)){
					if(time() - $this->timer < filemtime($this->fileName)){}
					else{
						unlink($this->fileName);
						$openFile = fopen($this->fileName,"w+");
						fwrite($openFile,ob_get_contents());
					}
				}
				else{
					$openFile = fopen($this->fileName,"w+");
					fwrite($openFile,ob_get_contents());
				}
			}
		}
		function control(){
			require APPLICATION_PATH."cache/config.php";
			if(@$cacheConfigs[$this->getUrl] and @$cacheConfigs[$this->getUrl]["cache"]){
				if(file_exists($this->fileName)){
					if(time() - $this->timer < filemtime($this->fileName)){
						return true;
					}
					else{
						return false;
					}
				}
				else{
					return false;
				}
			}
			else{
				return false;
			}
		}
		function read(){
			require $this->fileName;
		}
	}
//---------------------------------------------------------------------------
/* End of file MSCache.php */
/* Location : ./system/core/libs/MSCache.php*/
?>