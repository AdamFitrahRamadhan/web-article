<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Preview extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_preview','pre');
	}
	public function index()
	{
		$data['konten'] = "preview";
		$data['tampil_preview']=$this->pre->getDataPreview();
		$this->load->view('main', $data);		
	}
	public function detail($id)
	{
		$data=$this->pre->detail($id);
		echo json_encode($data);
	}

}

/* End of file Preview.php */
/* Location: ./application/controllers/Preview.php */