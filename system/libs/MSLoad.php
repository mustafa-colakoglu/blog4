<?php
/**
	* msMVC
	* @package MSmvc
	* @author Mustafa Çolakoğlu
	* @since Version 1.0

//---------------------------------------------------------------------------

	* msMVC MSLoad
	* @package msMVC
	* @subpackage libs
	* @author Mustafa Çolakoğlu
	
**/
	class MSLoad extends MSCore{
		var $loadedExtensions = array();
		var $loadedControllers = array();
		var $loadedModels = array();
		function __construct(){
			parent::__construct();
		}
		public function controller($controller=false,$url=false){
			if($this->controllerName and $controller === $this->controllerName){
				return false;
			}
			if(file_exists(APPLICATION_PATH."/back/controllers/".$controller.".php")){
				$MSCache = new MSCache($controller);
				if($MSCache->control()){
					$MSCache->read();
					return true;
				}
				else{
					ob_start();
					if(in_array($controller,$this->loadedControllers)){
						$running = new $controller();
						$running->activeIndex();
						$MSCache->runCache();
						ob_end_flush();
						return true;
					}
					require_once APPLICATION_PATH."back/controllers/".$controller.".php";
					array_push($this->loadedControllers,$controller);
					$running = new $controller();
					$running->activeIndex();
					$MSCache->runCache();
					ob_end_flush();
					return true;
				}
			}
			else{
				return false;
			}
		}
		public function model($modelName=false){
			if(file_exists(APPLICATION_PATH."/back/models/".$modelName."_model.php")){
				if(in_array($modelName,$this->loadedModels)){
					return new $modelName();
				}
				require_once APPLICATION_PATH."/back/models/".$modelName."_model.php";
				array_push($this->loadedModels,$modelName);
				return new $modelName();
			}
			else{
				return false;
			}
		}
		public function view($viewName=false,$data=false){
			if($data){
				extract($data);
			}
			if(!$viewName){
				return false;
			}
			if(file_exists(APPLICATION_PATH."/back/views/".$viewName."_view.php")){
				require APPLICATION_PATH."/back/views/".$viewName."_view.php";
			}
		}
		public function extension($extensionName=false){
			if($extensionName){
				if(in_array($extensionName,$this->loadedExtensions)){
					return new $extensionName;
				}
				else{
					if(file_exists(SYSTEM_PATH."libs/extensions/".$extensionName.".php")){
						require_once SYSTEM_PATH."libs/extensions/".$extensionName.".php";
						array_push($this->loadedExtensions,$extensionName);
						return new $extensionName;
					}
					else{
						return false;
					}
				}
			}
			else{
				return false;
			}
		}
	}
//---------------------------------------------------------------------------
/* End of file MSLoad.php */
/* Location : ./system/core/libs/MSLoad.php*/
?>