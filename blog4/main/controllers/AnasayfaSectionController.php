<?php
	namespace Controllers;
	use MS\MSController;
	class AnasayfaSection extends MSController{
		function __construct(){
			parent::__construct();
		}
		function actionIndex(){
			$data = $this->model("anaSayfaSection")->yazilar();
			$this->view("anasayfaSection",$data);
		}
	}
?>