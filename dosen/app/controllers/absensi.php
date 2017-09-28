<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class absensi extends CI_Controller {
	public function index()
	{
		$this->load->model('user');
		$data['text'] 		= "aku cinta kepadamu";

		$data['menu']			= $this->load->view('menu',array(),true);
		$data['content_kanan']	= $this->load->view('absensi',array(),true);
		
		$this->load->view('home',$data);
	}
}
