<?php 
	 

class Crud extends CI_Controller{ //class turunan CI_contoller
 
	function __construct(){  //fungsi construct
		parent::__construct();		 //construct pada parent
		$this->load->model('m_data'); //memanggil model bernama "m_data"
        $this->load->helper('url'); //memanggil helper url
	}
    public function index(){ //fungsi untuk halaman
		$this->load->view('v_header_login'); //untuk menampilkan header
		$this->load->database(); //untuk mengambil database
		$jumlah_data = $this->m_data->jumlah_data();
		$this->load->library('pagination'); //memanggil library pagination
		$config['base_url'] = base_url().'index.php/crud/index/'; //mengatur base url
		$config['total_rows'] = $jumlah_data; 
		$config['per_page'] = 10; //mengatur jumlah data perhalaman
		$from = $this->uri->segment(3); //mengatur uri segment
		$this->pagination->initialize($config);		//inisialisasi halaman
		$data['user'] = $this->m_data->data($config['per_page'],$from);
		$this->load->view('v_tampil',$data); //memanggil view bernama v_tampil
		$this->load->view('v_footer'); //memanggil footer
	}
	//function index(){
		//$data['user'] = $this->m_data->tampil_data()->result();
		//$this->load->view('v_tampil',$data);
    //}

    function tambah(){ //fungsi untuk input data
		$this->load->view('v_header_login'); //memanggil header login
		$this->load->view('v_input'); //memanggil view bernama "v_input"
		$this->load->view('v_footer'); //memanggil footer 
    }
    
    function tambah_aksi(){ //fungsi untuk input data dalam database
		$nama = $this->input->post('nama');  //input nama
		$alamat = $this->input->post('alamat'); //input alamat
		$pekerjaan = $this->input->post('pekerjaan'); //input pekerjaan
 
		$data = array( //data dibuat ke dalam array
			'nama' => $nama, //deklarasi nama
			'alamat' => $alamat, //deklarasi alamat
			'pekerjaan' => $pekerjaan //deklarasi pekerjaan
			);
		$this->m_data->input_data($data,'user'); //memanggil input_data pada model m_data
		redirect('crud/index'); //meneruskan input data ke link direktori file "crud/index"
    }
    
    function hapus($id){ //fungsi untuk hapus data
		$where = array('id' => $id); //deklarasi id
		$this->m_data->hapus_data($where,'user');  //memanggil hapus_data pada model m_data
		redirect('crud/index'); //meneruskan ke direktori file "crud/index"
    }
    
    function edit($id){ //fungsi untuk edit data
		$this->load->view('v_header_login'); //menampilkan header
		$where = array('id' => $id); //membuat array id
		$data['user'] = $this->m_data->edit_data($where,'user')->result();  //memanggil edit_data pada model m_data
		$this->load->view('v_edit',$data); //menampilkan form edit data
		$this->load->view('v_footer'); //menampilkan footer
    }
    
    function update(){ //fungsi untuk edit data dalam database
        $id = $this->input->post('id'); //update id ke database
        $nama = $this->input->post('nama'); //update nama ke database
        $alamat = $this->input->post('alamat'); //update alamat ke database
        $pekerjaan = $this->input->post('pekerjaan'); //updat pekerjaan ke database
     
        $data = array( //membuat array
            'nama' => $nama, //deklarasi nama
            'alamat' => $alamat, //deklarasi alamat
            'pekerjaan' => $pekerjaan //deklarasi pekerjaan
        );
     
        $where = array( //membuat array
            'id' => $id //deklarasi id
        );
     
        $this->m_data->update_data($where,$data,'user');  //memanggil update_data pada model m_data
        redirect('crud/index'); //meneruskan ke direktori file crud/index
    }
}