<?php
/**
	* msMVC
	* @package MSmvc
	* @author Mustafa Çolakoğlu
	* @since Version 1.0

//---------------------------------------------------------------------------

	* msMVC MSSystem
	* @package MSSystem
	* @subpackage core
	* @author Mustafa Çolakoğlu
	
**/
	class MSSystem extends MSCore{
		var $apps = array();
		public function __construct(){
			parent::__construct();
		}
		function createNewApplication(){
			session_start();
			$url=@$_GET["url"];
			$url=rtrim($url,"/");
			$url=ltrim($url,".");
			$url=ltrim($url,"/");
			$url=explode("/",$url);
			$this->url = $url;
			$this->controllerName = @$url[0];
			require APPLICATION_PATH."config/config.php";
			require SYSTEM_PATH."libs/MSLoad.php";
			require SYSTEM_PATH."libs/MSController.php";
			require SYSTEM_PATH."libs/MSDb.php";
			require SYSTEM_PATH."libs/MSModel.php";
			require SYSTEM_PATH."libs/MSCache.php";
			require SYSTEM_PATH."libs/MSGet.php";
			$this->bootstrap();
		}
		function loadApp($controllerName = false){
			if(@file_exists(APPLICATION_PATH."back/controllers/".$controllerName.".php")){
				require APPLICATION_PATH."back/controllers/".$controllerName.".php";
				$running = new $controllerName();
				$running->run();
			}
			else{
				require APPLICATION_PATH."back/controllers/hata.php";
				$running = new $this->hata();
				$running->run();
			}
		}
		function bootstrap(){
			if($this->controllerName=="css" or $this->controllerName=="js" or $this->controllerName=="images"){
				$file = $this->site."/app/front/".implode($this->url,"/");
				header("Location:".$file);
			}
			$MSCache = new MSCache();
			if($MSCache->control()){
				$MSCache->read();
			}
			else{
				ob_start();
				if($this->controllerName!=""){
					if(@file_exists(APPLICATION_PATH."back/controllers/".$this->controllerName.".php")){
						$this->loadApp($this->controllerName);
					}
					else{
						$this->controllerName = "hata";
						$this->loadApp($this->controllerName);
					}
				}
				else{
					$this->controllerName = $this->welcomeController;
					$this->loadApp($this->controllerName);
				}
				$MSCache->runCache();
				ob_end_flush();
			}
		}
	}
	$system = new MSSystem();
	$system->createNewApplication();
//---------------------------------------------------------------------------
/* End of file MSSystem.php */
/* Location : ./system/core/MSSystem.php*/
?>