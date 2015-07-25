<?php
	class hakkimdaSection extends MSController{
		function __construct(){
			parent::__construct();
		}
		function activeIndex(){
			$this->view("hakkimdaSection");
		}
	}
?>