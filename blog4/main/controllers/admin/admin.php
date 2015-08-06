<?php
	namespace Controllers\admin;
	use MS\MSController;
	class admin extends MSController{
		function __construct(){
			parent::__construct();
		}
		function actionIndex(){
			$giris = $_SESSION["blogGiris"];
			if($_POST and !$giris){
				if(@$_POST["kadi"] === "mustafa220" and @$_POST["sifre"] === "mustafa"){
					$_SESSION["blogGiris"] = true;
				}
			}
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