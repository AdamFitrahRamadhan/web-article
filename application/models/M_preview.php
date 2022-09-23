<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_preview extends CI_Model {

	public function getDataPreview()
	{
		$query = $this->db->query('SELECT * FROM posts WHERE status="PUBLISHED"')->result();
		return $query;
	}
	public function detail($a)
	{
		return $this->db->where('id', $a)->get('posts')->row();
	}

}

/* End of file M_preview.php */
/* Location: ./application/models/M_preview.php */