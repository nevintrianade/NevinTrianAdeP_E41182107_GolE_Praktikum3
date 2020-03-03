<?php 
 
class Form extends CI_Controller{ //class turunan CI_contoller
 
	function __construct(){ //fungsi construct
		parent::__construct(); //construct pada parent
		$this->load->library('form_validation'); //memanggil library form validation
	}
 
	function index(){ //fungsi bernama index
		$this->load->view('v_form'); //memanggil view bernama "v_form"
	}
 
	function aksi(){ //fungsi bernama aksi
		$this->form_validation->set_rules('nama','Nama','required'); // fungsi untuk membuat nama wajib diisikan
		$this->form_validation->set_rules('email','Email','required'); //fungsi untuk membuat email wajib diisikan
		$this->form_validation->set_rules('konfir_email','Konfirmasi Email','required'); //fungsi untuk membuat konfirmasi email wajib diisikan
 
		if($this->form_validation->run() != false){  //fungsi if "jika form validasi benar, maka..."
			echo "Form validation oke"; //muncul tulisan "form validation oke"
		}else{
			$this->load->view('v_form'); //menampilkan view bernama "v_form"
		}
	}
}