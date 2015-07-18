<?php
/**
	* msMVC
	* @package MSmvc
	* @author Mustafa Çolakoğlu
	* @since Version 1.0

//---------------------------------------------------------------------------

	* msMVC MSCaptcha
	* @package msMVC
	* @subpackage libs
	* @author Mustafa Çolakoğlu
	
**/
	class MSCaptcha{
		private $text;
		private $imageWidth;
		private $imageHeight;
		private $getImage;
		function __construct(){
			
		}
		function setCaptcha($imageWidth,$imageHeight,$text=false){
			$this->imageWidth = $imageWidth;
			$this->imageHeight = $imageHeight;
			if($text){
				$this->text = $text;
			}
			else{
				$chars = "ABCDEFGHIJKLMNOPRSTUVYZWXQabcdefghijklmnoprstuvyzwxq0123456789";
				$length = rand(5,$imageWidth/$imageHeight);
				$text = "";
				for($i=0;$i<$length;$i++){
					$text=$text.$chars[rand(0,strlen($chars)-1)];
				}
				$this->text = $text;
			}
		}
		function makeCaptcha(){
			$_SESSION["MSCaptchaText"]=$this->text;
			$_SESSION["MSCaptchaWidth"]=$this->imageWidth;
			$_SESSION["MSCaptchaHeight"]=$this->imageHeight;
			$this->getImage = '<img src="'.MSGet::getSite().'/MSCaptchaImage" />';
		}
		function getImage(){
			return $this->getImage;
		}
		function getText(){
			return $_SESSION["MSCaptchaText"];
		}
	}
//---------------------------------------------------------------------------
/* End of file MSCaptcha.php */
/* Location : ./system/core/libs/MSCaptcha.php*/
?>