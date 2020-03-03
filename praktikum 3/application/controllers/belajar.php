<?php
defined('BASEPATH') OR exit('No direct script access allowed'); //membuka file secara langsung tidak diizinkan
 
class Belajar extends CI_Controller { //class turunan CI_contoller
	
	function __construct(){ //fungsi construct
        parent::__construct(); //construct pada parent
        $this->load->helper('html'); //memanggil helper html
        $this->load->model('m_data'); //memanggil model bernama "m_data"
        
		
	}
 
	public function index(){  //fungsi bernama index
		echo "ini method index pada controller belajar"; //menampilkan tulisan "ini method index pada controller belajar"
	}
 
	public function halo(){ //fungsi bernama halo
        		$data = array( //membuat data array
			'judul' => "Cara Membuat View Pada CodeIgniter", //deklarasi judul
			'tutorial' => "CodeIgniter" //deklarasi tutorial
			);
		$this->load->view('v_belajar',$data); //menampilkan view bernama "v_belajar"
    }
    
    function user(){ //fungsi bernama user
		$data['user'] = $this->m_data->ambil_data()->result(); //mengambil data dari model m_data
		$this->load->view('v_user.php',$data); //menampilkan view bernama "v_user"
	}
 
}