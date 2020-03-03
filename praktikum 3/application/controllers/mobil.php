<?php
defined('BASEPATH') OR exit('No direct script access allowed');  //membuka file secara langsung tidak diizinkan
 
class Mobil extends CI_Controller { //class turunan CI_contoller
 
	public function warna(){ //fungsi bernama warna
		echo "Segment 1 adalah = " . $this->uri->segment('1') . "<br/>";	//menampilkan segment 1	
		echo "Segment 2 adalah = " . $this->uri->segment('2') . "<br/>";	//menampilkan segment 2
		echo "Segment 3 adalah = " . $this->uri->segment('3') . "<br/>";	//menampilkan segment 3	
		echo "Segment 4 adalah = " . $this->uri->segment('4') . "<br/>";	//menampilkan segment 4	
		echo "Segment 5 adalah = " . $this->uri->segment('5') . "<br/>";	//menampilkan segment 5	
	}
}