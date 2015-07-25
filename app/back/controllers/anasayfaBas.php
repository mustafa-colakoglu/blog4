<?php
	class anasayfaBas extends MSController{
		function __construct(){
			parent::__construct();
		}
		function activeIndex(){
			$data = $this->model("iletisimModel")->veriler();
			$this->view("anasayfaBas",$data);
		}
	}
?>