<?php 
 
class Login extends CI_Controller{ //class turunan CI_contoller
 
	function __construct(){ //fungsi construct
		parent::__construct();	 //construct pada parent	
		$this->load->model('m_login'); //memanggil model bernama "m_login"
		$this->load->library('form_validation');  //memanggil library form validation
 
	}
 
	function index(){ //fungsi bernama index
		$this->load->view('v_login'); //memanggil view bernama "v_login"
	}
 
	function aksi_login(){ //fugsi bernama aksi_login
		$this->load->view('v_header'); //memanggil view header
		$this->form_validation->set_rules('username','Username','required'); //form validasi username wajib diisi
		$this->form_validation->set_rules('password','Password','required'); //form validasi password wajib diisi
		
		if($this->form_validation->run() != true){ //if form validasi salah, maka...
	
			
			$this->load->view('v_login'); //memanggil view bernama "v_login"
			
		}


		$username = $this->input->post('username'); //meneruskan inputan username
		$password = $this->input->post('password'); //meneruskan inputan password
		$where = array( 
			'username' => $username, //deklarasi username
			'password' => md5($password) //deklarasi password md5
			);
		$cek = $this->m_login->cek_login("admin",$where)->num_rows(); //fungsi cek login
		if($cek > 0){
 
			$data_session = array( //membuat array pada username
				'nama' => $username,
				'status' => "login"
				);
				
			$this->session->set_userdata($data_session); //memanggil session login
 
			redirect(base_url("web/home1")); //meneruskan ke direktori fule "web/home1"
 
		}else{
			echo "Username dan password salah !"; //menampilkan tulisan "username dan password salah"
			
			
			
			
		}
		$this->load->view('v_footer'); //memanggil footer
	}
 
	function logout(){ //fungsi logout
		$this->session->sess_destroy(); //session dihapus
		redirect(base_url('web/login')); //meneruskan ke direktori file "web/login"
	}
}
