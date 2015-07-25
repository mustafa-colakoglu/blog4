<?php
	class iletisim extends MSController{
		function __construct(){
			parent::__construct();
		}
		function activeIndex(){
			$this->model("iletisimModel")->postKaydet();
			$data = $this->model("iletisimModel")->veriler();
			$this->view("iletisimBas",$data);
			$this->view("iletisimSection",$data);
		}
	}
?>