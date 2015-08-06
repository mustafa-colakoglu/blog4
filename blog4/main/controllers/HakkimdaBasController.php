<?php
	namespace Controllers;
	use MS\MSController;
	class HakkimdaBas extends MSController{
		function __construct(){
			parent::__construct();
		}
		function actionIndex(){
			$data = $this->model("iletisim")->veriler();
			$this->view("hakkimdaBas",$data);
		}
	}
?>