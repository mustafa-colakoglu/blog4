<?php
	namespace Controllers\admin;
	use MS\MSController;
	class admin extends MSController{
		function __construct(){
			parent::__construct();
		}
		function actionIndex(){
			$giris = $_SESSION["blogGiris"];
			if(!$giris){
				$this->view("admin/adminBas",array("title" => "Giriş Yapın !"));
				$this->view("admin/girisPanel");
				$this->view("admin/adminSon");
			}
			else{
				$this->controller("admin/anasayfa");
			}
		}
	}
?>