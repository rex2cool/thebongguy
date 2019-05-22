<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_category_m extends CI_Model {

	public function add_category($records)
	{
		$this->db->insert('category',$records);
		return $records;
	}
}
