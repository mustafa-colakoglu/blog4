<?php
	class ajaxYaziGetirModel extends MSModel{
		function __construct(){
			parent::__construct();
		}
		function veriler(){
			$data = array();
			if($_POST){
				$sayfa = $this->clean(@$_POST["sayfa"]);
				$start = $sayfa*10;
				$finish=($sayfa+1)*10;
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