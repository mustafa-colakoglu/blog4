<?php
	class anasayfa extends MSController{
		function __construct(){
			parent::__construct();
		}
		function activeIndex(){
			$this->controller("anasayfaBas");
			$this->controller("anasayfaSection");
		}
	}
?>