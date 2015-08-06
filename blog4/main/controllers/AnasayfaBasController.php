<?php
	namespace Controllers;
	use MS\MSController;
	class AnasayfaBas extends MSController{
		function __construct(){
			parent::__construct();
		}
		function actionIndex(){
			$data = $this->model("iletisim")->veriler();
			$this->view("anasayfaBas",$data);
		}
	}
?>