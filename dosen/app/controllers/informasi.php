<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informasi extends CI_Controller {
	public function index()
	{
		
		$data['content_kanan']	= $this->load->view('informasi',array(),true);
		
		$this->load->view('home',$data);
	}
}
