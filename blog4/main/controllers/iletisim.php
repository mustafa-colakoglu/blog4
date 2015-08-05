<?php
	namespace Controllers;
	use MS\MSController;
	class iletisim extends MSController{
		function __construct(){
			parent::__construct();
		}
		function actionIndex(){
			$this->model("iletisimModel")->postKaydet();
			$data = $this->model("iletisimModel")->veriler();
			$this->view("iletisimBas",$data);
			$this->view("iletisimSection",$data);
		}
	}
?>