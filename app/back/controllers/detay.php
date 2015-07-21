<?php
	class detay extends MSController{
		function __construct(){
			parent::__construct();
		}
		function activeIndex(){
			$this->controller("detayBas");
			$this->controller("detaySection");
		}
	}
?>