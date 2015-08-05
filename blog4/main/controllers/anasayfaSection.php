<?php
	namespace Controllers;
	use MS\MSController;
	class anasayfaSection extends MSController{
		function __construct(){
			parent::__construct();
		}
		function actionIndex(){
			$data = $this->model("anaSayfaSectionModel")->yazilar();
			$this->view("anasayfaSection",$data);
		}
	}
?>