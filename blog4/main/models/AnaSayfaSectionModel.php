<?php
	namespace Models;
	use MS\MSModel;
	class AnaSayfaSectionModel extends MSModel{
		function __construct(){
			parent::__construct();
		}
		function yazilar(){
			$data = array();
			$data["yazilar2"]=$this->select("yazilar");
			$data["yazilar"] = array();
			$data["kategoriler"]=$this->select("kategoriler","","","ORDER BY sira ASC");
			foreach($data["yazilar2"] as $yazi){
				$kategoriId = $yazi["kategoriId"];
				$kategori = $this->select("kategoriler","id='$kategoriId'");
				$kategoriAdi = "Kategorisiz";
				foreach($kategori as $kat){
					$kategoriAdi = $kat["kategoriAdi"];
				}
				$yazi["kategoriAdi"] = $kategoriAdi;
				array_push($data["yazilar"],$yazi);
			}
			return $data;
		}
	}
?>