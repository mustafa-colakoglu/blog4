<?php
	namespace Controllers;
	use MS\MSController;
	class Anasayfa extends MSController{
		function __construct(){
			parent::__construct();
		}
		function actionIndex(){
			$this->controller("anasayfaBas");
			$this->controller("anasayfaSection");
		}
	}
?>