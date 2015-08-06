<?php
	namespace Models;
	use MS\MSModel;
	class AjaxYaziGetirModel extends MSModel{
		function __construct(){
			parent::__construct();
		}
		function veriler(){
			$data = array();
			if($_POST){
				$sayfa = $this->Uselib->clean(@$_POST["sayfa"]);
				$yaziSayi = 1;
				$start = $sayfa*$yaziSayi;
				$finish=($sayfa+1)*$yaziSayi;
				$sayac = 0;
				$data["yazilar"]=array();
				$yazilar = $this->select("yazilar","","","ORDER BY id DESC");
				for($i=$start;$i<$finish;$i++){
					if(!@$yazilar[$i]){
						break;
					}
					$yazi = $yazilar[$i];
					$kategoriId = $yazi["kategoriId"];
					$kategori = $this->select("kategoriler","id='$kategoriId'");
					$kategoriAdi = "Kategorisiz";
					foreach($kategori as $kat){
						$kategoriAdi = $kat["kategoriAdi"];
					}
					$yazi["kategoriAdi"] = $kategoriAdi;
					array_push($data["yazilar"],$yazi);
				}
			}
			return $data;
		}
	}
?>