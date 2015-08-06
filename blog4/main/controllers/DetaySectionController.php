<?php
	namespace Controllers;
	use MS\MSController;
	class DetaySection extends MSController{
		function __construct(){
			parent::__construct();
		}
		function actionIndex(){
			$data = $this->model("detaySection")->veriler();
			$this->view("detaySection",$data);
		}
	}
?>