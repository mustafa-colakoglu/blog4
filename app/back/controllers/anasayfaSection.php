<?php
	class anasayfaSection extends MSController{
		function __construct(){
			parent::__construct();
		}
		function activeIndex(){
			$this->view("anasayfaSection");
		}
	}
?>