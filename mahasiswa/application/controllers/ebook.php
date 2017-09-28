<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ebook extends CI_Controller {
	public function index()
	{
		$this->load->model('user');
		$data['content_kanan']	= $this->load->view('ebook',array(),true);
		
		$this->load->view('home',$data);
	}
}
