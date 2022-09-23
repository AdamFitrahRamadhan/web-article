<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_addpost extends CI_Model {

	public function getDataPost()
	{
		return $this->db->get('posts')->result();
	}
	public function simpan_post()
	{
		$object = array(
		'title' => $this->input->post('title'),
		'content' => $this->input->post('content'),
		'category' => $this->input->post('category'),
		'created_date' => date('Y-m-d'),
		'status' => "PUBLISHED",
		// 'deleted' => "1"
		);
		return $this->db->insert('posts', $object);
	}
	public function draft_post()
	{
		$object = array(
		'title' => $this->input->post('title'),
		'content' => $this->input->post('content'),
		'category' => $this->input->post('category'),
		'created_date' => date('Y-m-d'),
		'status' => "DRAFTED"
		// 'deleted' => "1"
		);
		return $this->db->insert('posts', $object);
	}	

}

/* End of file M_addpost.php */
/* Location: ./application/models/M_addpost.php */