<?php
	namespace Controllers;
	use MS\MSController;
	class anasayfaBas extends MSController{
		function __construct(){
			parent::__construct();
		}
		function actionIndex(){
			$data = $this->model("iletisimModel")->veriler();
			$this->view("anasayfaBas",$data);
		}
	}
?>