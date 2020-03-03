<?php 
 
class M_data extends CI_Model{ //class turunan CI_Model
	function ambil_data(){ //fungsi bernama ambil_data
		return $this->db->get('user');  //memanggil database user
    }
    
    function tampil_data(){ //fungsi bernama tampil_data
		return $this->db->get('user'); //memanggil database user
    }
    
    function input_data($data,$table){  //fungsi bernama input_data
		$this->db->insert($table,$data); //fungsi insert data pada tabel database
    }


    
    function hapus_data($where,$table){ //fungsi bernama hapus_data
        $this->db->where($where);
        $this->db->delete($table); //fungsi hapus data pada tabel database
    }

	function edit_data($where,$table){		 //fungsi bernama edit_data
		return $this->db->get_where($table,$where); //fungsi edit data pada form
	}
 
	function update_data($where,$data,$table){ //fungsi bernama update_data
		$this->db->where($where);
		$this->db->update($table,$data); //fungsi edit data pada tabel database
    }	
    
    function data($number,$offset){ //fungsi bernama data
		return $query = $this->db->get('user',$number,$offset)->result();	//fungsi mencari jumlah data pada tabel user	
	}
 
	function jumlah_data(){ //fungsi bernama jumlah data
		return $this->db->get('user')->num_rows(); //fungsi mencari jumlah data pada tabel user
	}
}