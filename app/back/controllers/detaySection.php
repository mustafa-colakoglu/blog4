<?php
	class detaySection extends MSController{
		function __construct(){
			parent::__construct();
		}
		function activeIndex(){
			$this->view("detaySection");
		}
	}
?>