<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matakuliah extends CI_Controller {
	public function index()
	{
		$this->load->model('user');

		$data['menu']			= $this->load->view('menu',array(),true);

		$content_kanan['link_quis']		= site_url('matakuliah/quis');
		$data['content_kanan']	= $this->load->view('matakuliah',$content_kanan,true);
		
		$this->load->view('home',$data);
	}

	public function quis()
	{
		$this->load->model('user');

		$data['menu']			= $this->load->view('menu',array(),true);
		$data['content_kanan']	= $this->load->view('quis',array(),true);
		
		$this->load->view('home',$data);
	}
	public function soal()
	{
		$data['menu']			= "";		
		$this->load->view('soal',$data);
	}
}
