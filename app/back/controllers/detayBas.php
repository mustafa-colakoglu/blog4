<?php
	class detayBas extends MSController{
		function __construct(){
			parent::__construct();
		}
		function activeIndex(){
			$this->view("detayBas");
		}
	}
?>