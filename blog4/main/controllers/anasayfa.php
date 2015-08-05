<?php
	namespace Controllers;
	use MS\MSController;
	class anasayfa extends MSController{
		function __construct(){
			parent::__construct();
		}
		function actionIndex(){
			$this->controller("anasayfaBas");
			$this->controller("anasayfaSection");
		}
	}
?>