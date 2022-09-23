<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Addpost extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_addpost','add');
	}
	public function index()
	{
		$data['konten'] = "addpost";
		$data['tampil_post']=$this->add->getDataPost();
		$this->load->view('main', $data);		
	}
	public function tambah_post()
	{	
		if ($this->add->simpan_post()) {
			$this->session->set_flashdata('pesan', 'sukses menambah');
			redirect('addpost','refresh');
		} else {
			$this->session->set_flashdata('pesan', 'gagal menambah');
			redirect('addpost','refresh');
		}
	}
	public function tambah_post_draft()
	{	
		if ($this->add->draft_post()) {
			$this->session->set_flashdata('pesan', 'sukses menambah');
			redirect('addpost','refresh');
		} else {
			$this->session->set_flashdata('pesan', 'gagal menambah');
			redirect('addpost','refresh');
		}
	}
	

}

/* End of file Addpost.php */
/* Location: ./application/controllers/Addpost.php */