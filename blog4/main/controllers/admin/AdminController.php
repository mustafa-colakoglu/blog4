<?php
	namespace Controllers\admin;
	use MS\MSController;
	use MSGet;
	class Admin extends MSController{
		function __construct(){
			parent::__construct();
		}
		function actionIndex(){
			$giris = @$_SESSION["blogGiris"];
			if($_POST and !$giris){
				if(@$_POST["kadi"] === "mustafa220" and @$_POST["sifre"] === "mustafa"){
					$_SESSION["blogGiris"] = true;
					$giris = true;
				}
			}
			if(!$giris){
				$this->view("admin/adminBas",array("title" => "Giriş Yapın !"));
				$this->view("admin/girisPanel");
				$this->view("admin/adminSon");
			}
			else{
				header("Location:".MSGet::getSite()."/admin/anasayfa");
			}
		}
	}
?>