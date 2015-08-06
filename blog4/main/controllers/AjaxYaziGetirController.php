<?php
	namespace Controllers;
	use MS\MSController;
	class AjaxYaziGetir extends MSController{
		function __construct(){
			parent::__construct();
		}
		function actionIndex(){
			$data = $this->model("ajaxYaziGetir")->veriler();
			$this->view("ajaxYaziGetir",$data);
		}
	}
?>