<?php
	class detaySection extends MSController{
		function __construct(){
			parent::__construct();
		}
		function activeIndex(){
			$data = $this->model("detaySectionModel")->veriler();
			$this->view("detaySection",$data);
		}
	}
?>