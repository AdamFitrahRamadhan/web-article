<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_allpost extends CI_Model {

	public function getDataPublished()
	{
		$query = $this->db->query('SELECT * FROM posts WHERE status="PUBLISHED"')->result();
		return $query;
	}	
	public function getDataDrafted()
	{
		$query = $this->db->query('SELECT * FROM posts WHERE status="DRAFTED"')->result();
		return $query;
	}	
	public function getDataTrashed()
	{
		$query = $this->db->query('SELECT * FROM posts WHERE status="TRASHED"')->result();
		return $query;
	}	
	public function edit_data()
	{
		$object = array(
		'title' => $this->input->post('title'),
		'content' => $this->input->post('content'),
		'category' => $this->input->post('category'),
		'updated_date' => date('Y-m-d'),
		// 'status' => "TRASHED"
		);
		return $this->db->where('id', $this->input->post('id'))->update('posts', $object);
	}
	public function hapus_data()
	{
		$object = array(
		// 'title' => $this->input->post('title'),
		// 'content' => $this->input->post('content'),
		// 'category' => $this->input->post('category'),
		// 'updated_date' => date('Y-m-d'),
		'status' => "TRASHED"
		);
		return $this->db->where('id', $this->input->post('id'))->update('posts', $object);
	}
	public function detail($a)
	{
		return $this->db->where('id', $a)->get('posts')->row();
	}
	public function hapus($id)
	{
		return $this->db->where('id', $id)->delete('posts');
	}

}

/* End of file M_allpost.php */
/* Location: ./application/models/M_allpost.php */