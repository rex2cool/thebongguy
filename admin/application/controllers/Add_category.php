<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_category extends CI_Controller {

	function __construct(){
        parent::__construct();
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('login');
        }else{
			$user_id = $this->session->userdata['logged_in']['user_id'];
	    }
    }

	public function index()
	{
		$this->load->view('category/add_category');
	}

	public function add_cat()
	{
		$this->load->model('add_category_m');
		$user_id = $this->session->userdata['logged_in']['user_id'];
		$cat_name = $this->input->post('category');

		$records = array('category_name'=>$cat_name);
		$add_category = $this->add_category_m->add_category($records);

		if($add_category)
		{
			$this->session->set_flashdata("success", "Product Updated Successfully!");
			redirect('add_category');
		}else
		{
			$this->session->set_flashdata("failed", "Product Updated Wrong!");
			redirect('add_category');
		}
	}
}

/* End of file add_tshirt.php */
/* Location: ./application/controllers/add_tshirt.php */