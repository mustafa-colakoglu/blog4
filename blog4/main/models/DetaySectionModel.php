<?php
	namespace Models;
	use MS\MSModel;
	use MSGet;
	class DetaySectionModel extends MSModel{
		function __construct(){
			parent::__construct();
		}
		function veriler(){
			$data = array();
			$url = $this->url;
			$id = $this->Uselib->clean($url[1]);
			$data["yaziDetay"] = $this->select("yazilar","id='$id'");
			$data["kategoriler"]=$this->select("kategoriler","","","ORDER BY sira ASC");
			$kategoriId = $data["yaziDetay"][0]["kategoriId"];
			$kategori = $this->select("kategoriler","id='$kategoriId'");
			$data["yaziDetay"][0]["kategoriAdi"] =$kategori[0]["kategoriAdi"];
			if($_POST){
				$this->Uselib->formDataFix();
				$adiSoyadi = @$_POST["adSoyad"];
				$ePosta = @$_POST["ePosta"];
				$yorum = @$_POST["yorum"];
				$yorumId = 0;
				$yorumId = @$_POST["yorumId"];
				$yaziId = $id;
				$this->insert("yorumlar","yaziId,yorumId,adiSoyadi,ePosta,yorum","'$yaziId','$yorumId','$adiSoyadi','$ePosta','$yorum'");
				header("Location:".MSGet::getSite()."/detay/".$id."#".$this->lastInsertId());
			}
			$data["yorumlar"]=$this->select("yorumlar","yaziId='$id'");
			$data["yorumSayi"]=count($data["yorumlar"]);
			return $data;
		}
	}
?>