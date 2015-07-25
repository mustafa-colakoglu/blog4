<?php
/**
	* msMVC
	* @package MSmvc
	* @author Mustafa Çolakoğlu
	* @since Version 1.0

//---------------------------------------------------------------------------

	* msMVC MSCore
	* @package msMVC
	* @subpackage core
	* @author Mustafa Çolakoğlu
	
**/
	class MSCore{
		var $apps = array();
		function __construct(){
			require APPLICATION_PATH."config/config.php";
			if($siteInfo["welcomeController"]){
				$this->welcomeController = $siteInfo["welcomeController"];
			}
			else{
				$this->welcomeController = "anasayfa";
			}
			$url=@$_GET["url"];
			$url=rtrim($url,"/");
			$url=ltrim($url,"/");
			$url=explode("/",$url);
			$this->url = $url;
			if($url[0]){
				$this->controllerName = $url[0];
			}
			else{
				$this->controllerName = $this->welcomeController;
			}
			$this->site = $siteInfo["host"];
		}
		function formDataFix($degisken=false){
			if($degisken){
				$degisken=$this->findChange('"',"&#34",$degisken);
				$degisken=$this->findChange("%","&#37",$degisken);
				$degisken=$this->findChange("'","&#39",$degisken);
				$degisken=$this->findChange("?","&#63",$degisken);
				$degisken=$this->findChange("`","&#96",$degisken);
				$degisken=$this->findChange("‘","&#8216",$degisken);
				$degisken=$this->findChange("’","&#8217",$degisken);
				$degisken=$this->findChange("“","&#8220",$degisken);
				$degisken=$this->findChange("”","&#8221",$degisken);
				$degisken=$this->findChange(":","&#58",$degisken);
				$degisken=$this->findChange(";","&#59",$degisken);
				$degisken=$this->findChange("<","&#60",$degisken);
				$degisken=$this->findChange("=","&#61",$degisken);
				$degisken=$this->findChange(">","&#62",$degisken);
				$degisken=$this->findChange(">","&#62",$degisken);
				return $degisken;
			}
			else{
				foreach($_POST as $key=>$value){
					$_POST[$key]=$this->findChange('"',"&#34",$_POST[$key]);
					$_POST[$key]=$this->findChange("%","&#37",$_POST[$key]);
					$_POST[$key]=$this->findChange("'","&#39",$_POST[$key]);
					$_POST[$key]=$this->findChange("?","&#63",$_POST[$key]);
					$_POST[$key]=$this->findChange("`","&#96",$_POST[$key]);
					$_POST[$key]=$this->findChange("‘","&#8216",$_POST[$key]);
					$_POST[$key]=$this->findChange("’","&#8217",$_POST[$key]);
					$_POST[$key]=$this->findChange("“","&#8220",$_POST[$key]);
					$_POST[$key]=$this->findChange("”","&#8221",$_POST[$key]);
					$_POST[$key]=$this->findChange(":","&#58",$_POST[$key]);
					$_POST[$key]=$this->findChange(";","&#59",$_POST[$key]);
					$_POST[$key]=$this->findChange("<","&#60",$_POST[$key]);
					$_POST[$key]=$this->findChange("=","&#61",$_POST[$key]);
					$_POST[$key]=$this->findChange(">","&#62",$_POST[$key]);
					$_POST[$key]=$this->findChange(">","&#62",$_POST[$key]);
				}
				foreach($_GET as $key=>$value){
					$_GET[$key]=$this->findChange('"',"&#34",$_GET[$key]);
					$_GET[$key]=$this->findChange("%","&#37",$_GET[$key]);
					$_GET[$key]=$this->findChange("'","&#39",$_GET[$key]);
					$_GET[$key]=$this->findChange("?","&#63",$_GET[$key]);
					$_GET[$key]=$this->findChange("`","&#96",$_GET[$key]);
					$_GET[$key]=$this->findChange("‘","&#8216",$_GET[$key]);
					$_GET[$key]=$this->findChange("’","&#8217",$_GET[$key]);
					$_GET[$key]=$this->findChange("“","&#8220",$_GET[$key]);
					$_GET[$key]=$this->findChange("”","&#8221",$_GET[$key]);
					$_GET[$key]=$this->findChange(":","&#58",$_GET[$key]);
					$_GET[$key]=$this->findChange(";","&#59",$_GET[$key]);
					$_GET[$key]=$this->findChange("<","&#60",$_GET[$key]);
					$_GET[$key]=$this->findChange("=","&#61",$_GET[$key]);
					$_GET[$key]=$this->findChange(">","&#62",$_GET[$key]);
				}
			}
		}
		function findChange($bul,$degistir,$yazi){
			$yeni="";
			for($i=0;$i<strlen($yazi);$i++){
				if($bul==substr($yazi,$i,strlen($bul))){
					$i+=strlen($bul)-1;
					$yeni=$yeni.$degistir;
				}
				else{
					$yeni=$yeni.$yazi[$i];
				}
			}
			return $yeni;
		}
		function clean($temizlenen,$belirli=false){
			if($belirli==""){
				$cikar="'".'";/.,*=-+abcçdefgğhıijklmnoöprsştuüvyzABCÇDEFGĞHIİJKLMNOÖPRSŞTUÜVYZ';
			}
			else{
				$cikar=$belirli;
			}
			$count=strlen($cikar);
			$temizle=$temizlenen;
			for($i=0;$i<$count;$i++){
				$temizle=str_replace(substr($cikar,$i,1),"",$temizle);
			}
			return $temizle;
		}
	}
	include "system/core/MSSystem.php";
//---------------------------------------------------------------------------
/* End of file MSCore.php */
/* Location : ./system/core/MSCore.php*/
?>