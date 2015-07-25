<?php
	class detayBas extends MSController{
		function __construct(){
			parent::__construct();
		}
		function activeIndex(){
			$data = $this->model("iletisimModel")->veriler();
			$this->view("detayBas",$data);
		}
	}
?>