<?php 
 
class M_login extends CI_Model{	 //class turunan CI_Model
	function cek_login($table,$where){		//fungsi untuk cek login
		return $this->db->get_where($table,$where);
	}	
}