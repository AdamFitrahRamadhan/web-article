<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Allpost extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_allpost','all');
	}
	public function index()
	{
		$data['konten'] = "allpost";
		$this->load->view('main', $data);		
	}
	public function published()
	{
		$data['konten'] = "published";
		$data['tampil_published']=$this->all->getDataPublished();
		$this->load->view('main', $data);
	}
	public function drafts()
	{
		$data['konten'] = "drafts";
		$data['tampil_drafted']=$this->all->getDataDrafted();
		$this->load->view('main', $data);
	}
	public function trashed()
	{
		
		$data['konten'] = "trashed";
		$data['tampil_trashed']=$this->all->getDataTrashed();
		$this->load->view('main', $data);
	}
	public function ubah_()
	{
		if ($this->all->edit_data()) {
			$this->session->set_flashdata('pesan', 'berhasil');
		}
		else{
			$this->session->set_flashdata('pesan', 'gagal');
		}
		redirect('allpost/published','refresh');
	}
	public function ubah()
	{
		if ($this->all->edit_data()) {
			$this->session->set_flashdata('pesan', 'berhasil');
		}
		else{
			$this->session->set_flashdata('pesan', 'gagal');
		}
		redirect('allpost/drafts','refresh');
	}
	public function hapus()
	{
		if ($this->all->hapus_data()) {
			$this->session->set_flashdata('pesan', 'Sukses Hapus Data');
		} else {
			$this->session->set_flashdata('pesan', 'tidak berhasil dihapus, gagal');
		}
		redirect('allpost/trashed','refresh');
	}
	public function detail($id)
	{
		$data=$this->all->detail($id);
		echo json_encode($data);
	}
	public function hapuss($id)
	{
		if ($this->all->hapus($id)) {
			$this->session->set_flashdata('pesan', 'Sukses Hapus Data');
		} else {
			$this->session->set_flashdata('pesan', 'tidak berhasil dihapus, gagal');
		}
		redirect('allpost/trashed','refresh');
	}

}

/* End of file Allpost.php */
/* Location: ./application/controllers/Allpost.php */