<?php
	namespace Controllers;
	use MS\MSController;
	class hakkimda extends MSController{
		function __construct(){
			parent::__construct();
		}
		function actionIndex(){
			$this->controller("hakkimdaBas");
			$this->controller("hakkimdaSection");
		}
	}
?>