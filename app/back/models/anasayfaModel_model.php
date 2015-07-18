<?php
	class anasayfaModel extends MSModel{
		function __construct(){
			parent::__construct();
		}
		function veriler(){
			$data["title"]="anasayfabaşlık";
			$data["testVeri"]=$this->select("testtablo");
			$data["captcha"] = $this->extension("MSCaptcha");
			$data["captcha"]->setCaptcha(200,50);
			$data["captcha"]->makeCaptcha();
			echo $data["captcha"]->getImage();
			echo "<br />";
			return $data;
		}
	}
?>