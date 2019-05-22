<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_category extends CI_Controller {

	function __construct(){
        parent::__construct();
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('admin_login');
        }
    }

	public function index()
	{
		$this->load->model('edit_category_m');
		$cat_id = $this->uri->segment(2);
		$data['fetch_category'] = $this->edit_category_m->fetch_cat($cat_id);
		$this->load->view('category/edit_category',$data);
	}

	public function update_category()
	{
		$this->load->model('edit_category_m');
		$cat_id = $this->uri->segment(3);
		$category = $this->input->post('cat_name');

		$records = array('category_name'=>$category);
		$update_category = $this->edit_category_m->update_cat($cat_id,$records);

		if($update_category)
		{
			$this->session->set_flashdata("success", "Category Updated Successfully!");
			redirect('edit_category/'.$cat_id);
		}else{
			$this->session->set_flashdata("failed", "Something Went Wrong!");
			redirect('edit_category/'.$cat_id);
		}
	}
}

/* End of file Edit_dealers.php */
/* Location: ./application/controllers/Edit_dealers.php */