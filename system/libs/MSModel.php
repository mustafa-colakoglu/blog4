<?php
/**
	* msMVC
	* @package MSmvc
	* @author Mustafa Çolakoğlu
	* @since Version 1.0

//---------------------------------------------------------------------------

	* msMVC MSModel
	* @package msMVC
	* @subpackage libs
	* @author Mustafa Çolakoğlu
	
**/
	class MSModel extends MSDb{
		function __construct(){
			parent::__construct();
			$this->load=new MSLoad();
			$this->controller = $this->load->controller();
			$this->model = $this->load->model();
			$this->extension = $this->load->extension();
			echo $this->extension;
		}
	}
//---------------------------------------------------------------------------
/* End of file MSModel.php */
/* Location : ./system/core/libs/MSModel.php*/
?>