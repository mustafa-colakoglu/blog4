<?php
	class anasayfaSection extends MSController{
		function __construct(){
			parent::__construct();
		}
		function activeIndex(){
			$data = $this->model("anaSayfaSectionModel")->yazilar();
			$this->view("anasayfaSection",$data);
		}
	}
?>