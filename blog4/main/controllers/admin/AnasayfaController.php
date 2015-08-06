<?php
	namespace Controllers\admin;
	use MS\MSController;
	class Anasayfa extends MSController{
		function __construct(){
			parent::__construct();
		}
		function actionIndex(){
			$this->view("admin/adminBas",array("title" => "Anasayfa"));
			$this->controller("admin/anasayfaSection");
			$this->view("admin/adminSon");
		}
	}
?>