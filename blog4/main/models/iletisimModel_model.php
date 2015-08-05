<?php
	namespace Models;
	use MS\MSModel;
	class iletisimModel extends MSModel{
		function __construct(){
			parent::__construct();
		}
		function postKaydet(){
			$this->formDataFix();
			if($_POST){
				$adSoyad = @$_POST["adSoyad"];
				$ePosta = @$_POST["ePosta"];
				$mesaj = @$_POST["mesaj"];
				$this->insert("iletisim","adSoyad,ePosta,mesaj","'$adSoyad','$ePosta','$mesaj'");
			}
		}
		function veriler(){
			$data = array();
			$data["kategoriler"]=$this->select("kategoriler","","","ORDER BY sira ASC");
			return $data;
		}
	}
?>