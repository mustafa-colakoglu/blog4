<?php
	namespace Controllers;
	use MS\MSController;
	class ajaxYaziGetir extends MSController{
		function __construct(){
			parent::__construct();
		}
		function actionIndex(){
			$data = $this->model("ajaxYaziGetirModel")->veriler();
			$this->view("ajaxYaziGetir",$data);
		}
	}
?>