<?php 
class Upload extends CI_Controller{ //class turunan CI_contoller
 
	function __construct(){ //fungsi construct
		parent::__construct(); //construct pada parent
		  $this->load->helper(array('form', 'url')); //memanggil helper array form dan url
	}
 
	public function index(){ //fungsi bernama index
		$this->load->view('v_header_login'); //memanggil header setelah login
		$this->load->view('v_upload', array('error' => ' ' )); //peringatan error saat upload
		$this->load->view('v_footer'); //memanggil footer
	}
 
	public function aksi_upload(){ //fungsi bernama aksi_upload
		$config['upload_path']          = './pic/'; //direktori untuk upload file
		$config['allowed_types']        = 'gif|jpg|png'; //ekstensi atau tipe yang diperbolehkan
		$config['max_size']             = 300; //ukuran file dalam KB
		$config['max_width']            = 1024; //ukuran panjang gambar dalam pixel
		$config['max_height']           = 768; //ukuran lebar gambar dalam pixel
		$this->load->view('v_header_login'); //memanggil header setelah login
		$this->load->library('upload', $config);//memanggil library

		if ( ! $this->upload->do_upload('berkas')){ //upload gambar
			$error = array('error' => $this->upload->display_errors()); //jika error akan muncul peringatan
			$this->load->view('v_upload', $error); //menampilkan error pada view bernama v_upload
		}else{
			$data = array('upload_data' => $this->upload->data()); //jika berhasil diupload
			$this->load->view('v_upload_sukses', $data); //menampilkan view bernama v_upload_sukses
		}
		$this->load->view('v_footer'); //mamanggil footer
	}
	
}

