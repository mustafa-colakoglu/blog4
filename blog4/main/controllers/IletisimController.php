<?php
	namespace Controllers;
	use MS\MSController;
	class Iletisim extends MSController{
		function __construct(){
			parent::__construct();
		}
		function actionIndex(){
			$this->model("iletisim")->postKaydet();
			$data = $this->model("iletisim")->veriler();
			$this->view("iletisimBas",$data);
			$this->view("iletisimSection",$data);
		}
	}
?>