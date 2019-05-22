<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_category_m extends CI_Model {

	public function fetch_cat($cat_id)
	{
		$this->db->select('*');
		$this->db->from('category');
		$this->db->where('cat_id',$cat_id);
		$query = $this->db->get();
		return $query->row();
	}
	
	public function update_cat($cat_id,$records)
	{
		$this->db->where('cat_id', $cat_id);
		$this->db->update('category', $records);
		return $cat_id;
	}
}

/* End of file Edit_dealer_m.php */
/* Location: ./application/models/Edit_dealer_m.php */