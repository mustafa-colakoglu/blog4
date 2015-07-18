<?php
/**
	* msMVC
	* @package MSmvc
	* @author Mustafa Çolakoğlu
	* @since Version 1.0

//---------------------------------------------------------------------------

	* msMVC MSCore
	* @package msMVC
	* @subpackage core
	* @author Mustafa Çolakoğlu
	
**/
	class MSCore{
		var $apps = array();
		function __construct(){
			require APPLICATION_PATH."config/config.php";
			if($siteInfo["welcomeController"]){
				$this->welcomeController = $siteInfo["welcomeController"];
			}
			else{
				$this->welcomeController = "anasayfa";
			}
			$url=@$_GET["q"];
			$url=rtrim($url,"/");
			$url=ltrim($url,"/");
			$url=explode("/",$url);
			$this->url = $url;
			if($url[0]){
				$this->controllerName = $url[0];
			}
			else{
				$this->controllerName = $this->welcomeController;
			}
			$this->site = $siteInfo["host"];
		}
	}
	include "system/core/MSSystem.php";
//---------------------------------------------------------------------------
/* End of file MSCore.php */
/* Location : ./system/core/MSCore.php*/
?>