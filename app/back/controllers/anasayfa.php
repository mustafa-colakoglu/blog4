<?php
	class anasayfa extends MSController{
		function __construct(){
			parent::__construct();
		}
		function run(){
			$veri = $this->model("anasayfaModel");
			$veriler = $veri->veriler($this->url);
			$this->view("anasayfaView",$veriler);
		}
	}
?>