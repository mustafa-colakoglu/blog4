<?php
	class hakkimdaBas extends MSController{
		function __construct(){
			parent::__construct();
		}
		function activeIndex(){
			$data = $this->model("iletisimModel")->veriler();
			$this->view("hakkimdaBas",$data);
		}
	}
?>