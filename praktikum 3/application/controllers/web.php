<?php
defined('BASEPATH') OR exit('No direct script access allowed');  //membuka file secara langsung tidak diizinkan
 
class Web extends CI_Controller { //class turunan CI_contoller
	
	function __construct(){ //fungsi construct
		parent::__construct(); //construct pada parent
        $this->load->helper('url'); //memanggil helper url
        $this->load->helper(array('form', 'url')); //memanggil helper array form dan url
        $this->load->model('m_data'); //memanggil model bernama m_data
	}
 
	public function index(){		 //fungsi index
		$data['judul'] = "Halaman home"; //deklarasi judul bernama halaman home
		$this->load->view('v_header',$data); //memanggil header
		$this->load->view('v_index',$data); //memanggil view bernama v_index
		$this->load->view('v_footer',$data); //memanggil footer
    }
    public function about(){		//fungsi about
		$data['judul'] = "Halaman about"; //deklarasi judul bernama halaman about
		$this->load->view('v_header',$data); //memanggil header
		$this->load->view('v_about',$data);  //memanggil view bernama v_about
		$this->load->view('v_footer',$data); //memanggil footer
    }
    public function login(){		//fungsi login
		$data['judul'] = "Halaman login"; //deklarasi judul bernama halaman login
		$this->load->view('v_header',$data); //memanggil header
		$this->load->view('v_login',$data); //memanggil view bernama v_login
		$this->load->view('v_footer',$data); //memanggil footer
    }

    public function home1(){		//fungsi halaman home setelah login
		$data['judul'] = "Halaman home"; //deklarasi judul bernama halaman home setelah login
		$this->load->view('v_header_login',$data); //memanggil header setelah login
		$this->load->view('v_index',$data); //memanggil view bernama v_index
		$this->load->view('v_footer',$data); //memanggil footer
    } 

    public function about1(){		//fungsi halaman about setelah login
		$data['judul'] = "Halaman about"; //deklarasi judul bernama halaman about setelah login
		$this->load->view('v_header_login',$data); //memanggil header setelah login
		$this->load->view('v_about',$data); //memanggil view bernama v_about
		$this->load->view('v_footer',$data); //memanggil footer
    }
    

    public function download(){		//fungsi download
		$data['judul'] = "Halaman download"; //deklarasi judul bernama halaman download
		$this->load->view('v_header_login',$data); //memanggil header setelah login
		$this->load->view('v_download',$data); //memanggil view bernama v_download
		$this->load->view('v_footer',$data); //memanggil footer
    }

    public function upload(){		//fungsi upload
		$data['judul'] = "Halaman upload"; //deklarasi judul bernama halaman upload
		$this->load->view('v_header_login',$data); //memanggil header setelah login
		$this->load->view('v_upload',$data); //memanggil view bernama v_upload
		$this->load->view('v_footer',$data); //memanggil footer
    }
    public function upload_sukses(){		//fungsi upload sukses
		$data['judul'] = "Halaman upload"; //deklarasi judul bernama halaman upload sukses
		$this->load->view('v_header_login',$data); //memanggil header setelah login
		$this->load->view('v_upload_sukses',$data); //memanggil view bernama v_upload_sukses
		$this->load->view('v_footer',$data); //memanggil footer
    }
}