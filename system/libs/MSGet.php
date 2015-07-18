<?php
/**
	* msMVC
	* @package MSmvc
	* @author Mustafa Çolakoğlu
	* @since Version 1.0

//---------------------------------------------------------------------------

	* msMVC MSGet
	* @package msMVC
	* @subpackage libs
	* @author Mustafa Çolakoğlu
	
**/
	class MSGet{
		static function getSite(){
			require APPLICATION_PATH."config/config.php";
			return $siteInfo["host"];
		}
	}
//---------------------------------------------------------------------------
/* End of file MSGet.php */
/* Location : ./system/core/libs/MSGet.php*/
?>