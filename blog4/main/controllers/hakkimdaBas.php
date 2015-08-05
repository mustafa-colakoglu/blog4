<?php
	namespace Controllers;
	use MS\MSController;
	class hakkimdaBas extends MSController{
		function __construct(){
			parent::__construct();
		}
		function actionIndex(){
			$data = $this->model("iletisimModel")->veriler();
			$this->view("hakkimdaBas",$data);
		}
	}
?>