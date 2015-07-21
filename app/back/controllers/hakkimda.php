<?php
	class hakkimda extends MSController{
		function __construct(){
			parent::__construct();
		}
		function activeIndex(){
			$this->controller("hakkimdaBas");
			$this->controller("hakkimdaSection");
		}
	}
?>