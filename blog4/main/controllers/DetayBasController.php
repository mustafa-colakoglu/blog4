<?php
	namespace Controllers;
	use MS\MSController;
	class DetayBas extends MSController{
		function __construct(){
			parent::__construct();
		}
		function actionIndex(){
			$data = $this->model("iletisim")->veriler();
			$this->view("detayBas",$data);
		}
	}
?>