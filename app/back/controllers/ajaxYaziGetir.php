<?php
	class ajaxYaziGetir extends MSController{
		function __construct(){
			parent::__construct();
		}
		function activeIndex(){
			$data = $this->model("ajaxYaziGetirModel")->veriler();
			$this->view("ajaxYaziGetir",$data);
		}
	}
?>