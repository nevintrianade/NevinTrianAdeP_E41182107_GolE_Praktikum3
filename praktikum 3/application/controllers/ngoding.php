<?php
defined('BASEPATH') OR exit('No direct script access allowed');  //membuka file secara langsung tidak diizinkan
 
class Ngoding extends CI_Controller { //class turunan CI_contoller
	
	function index(){ //fungsi bernama index
		$this->load->library('malasngoding'); //memanggil library bernama malasngoding
		$this->malasngoding->nama_saya(); //memanggil fungsi nama_saya pada library
                echo "<br/>"; //memunculkan enter/jarak
                $this->malasngoding->nama_kamu("Andi");  //mengisi fungsi nama_kamu menjadi Andi
	}
 
}