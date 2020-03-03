<?php
defined('BASEPATH') OR exit('No direct script access allowed');  //membuka file secara langsung tidak diizinkan
 
class Download extends CI_Controller { //class turunan CI_contoller
	
	function __construct(){ //fungsi construct
		parent::__construct(); //construct pada parent
		$this->load->helper(array('url','download'));		//helper array untuk url dan download		
	}
 
	public function index(){		//fungsi bernama index
		$this->load->view('v_download'); //memanggil view bernama "v_download"
	}
 
	public function lakukan_download(){				//fungsi untuk melakukan download
		force_download('pic/flowchart.jpg',NULL); //nama file dan letak direktori file
	}	
 
}

