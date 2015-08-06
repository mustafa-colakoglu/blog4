<?php
	namespace Controllers;
	use MS\MSController;
	class HakkimdaSection extends MSController{
		function __construct(){
			parent::__construct();
		}
		function actionIndex(){
			$this->view("hakkimdaSection");
		}
	}
?>