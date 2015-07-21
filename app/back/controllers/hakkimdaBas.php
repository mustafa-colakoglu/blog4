<?php
	class hakkimdaBas extends MSController{
		function __construct(){
			parent::__construct();
		}
		function activeIndex(){
			$this->view("hakkimdaBas");
		}
	}
?>