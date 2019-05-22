<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listing_category_m extends CI_Model {

	public function fetch_cat()
	{
		$this->db->select('*');
		$this->db->from('category');
		$query = $this->db->get();
		return $query->result();
	}

	public function delete_cat($cat_id)
	{
		$this->db->where('cat_id', $cat_id);
		$this->db->delete('category');
		return true;
	}
}