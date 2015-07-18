<?php
/**
	* msMVC
	* @package MSmvc
	* @author Mustafa Çolakoğlu
	* @since Version 1.0

//---------------------------------------------------------------------------

	* msMVC MSController
	* @package msMVC
	* @subpackage libs
	* @author Mustafa Çolakoğlu
	
**/
	class MSController extends MSLoad{
		public function __construct(){
			$this->load = new MSLoad();
			parent::__construct();
		}
	}
//---------------------------------------------------------------------------
/* End of file MSController.php */
/* Location : ./system/core/libs/MSController.php*/
?>