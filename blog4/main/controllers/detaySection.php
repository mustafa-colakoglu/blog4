<?php
	namespace Controllers;
	use MS\MSController;
	class detaySection extends MSController{
		function __construct(){
			parent::__construct();
		}
		function actionIndex(){
			$data = $this->model("detaySectionModel")->veriler();
			$this->view("detaySection",$data);
		}
	}
?>