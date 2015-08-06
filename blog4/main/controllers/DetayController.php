<?php
	namespace Controllers;
	use MS\MSController;
	class Detay extends MSController{
		function __construct(){
			parent::__construct();
		}
		function actionIndex(){
			$this->controller("detayBas");
			$this->controller("detaySection");
		}
		function deneme(){
			echo "deneme";
		}
	}
?>