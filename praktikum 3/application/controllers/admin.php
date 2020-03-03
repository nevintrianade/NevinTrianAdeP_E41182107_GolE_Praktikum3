<?php 
 
class Admin extends CI_Controller{ //class turunan CI_contoller
 
	function __construct(){ //fungsi construct
		parent::__construct(); //construct pada parent
	
		if($this->session->userdata('status') != "login"){ //fungsi if status belum login, maka...
			redirect(base_url("login")); //meneruskan ke direktori file "login"
		}
	}
 
	function index(){ //fungsi bernama index
		$this->load->view('v_admin'); //menampilkan view pada file "v_admin"
		
	}
}