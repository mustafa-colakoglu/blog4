<?php
	class anasayfaBas extends MSController{
		function __construct(){
			parent::__construct();
		}
		function activeIndex(){
			$this->view("anasayfaBas");
		}
	}
?>