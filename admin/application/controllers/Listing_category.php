<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listing_category extends CI_Controller {

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
		$this->load->model('listing_category_m');
		$data['fetch_catgory'] = $this->listing_category_m->fetch_cat();
		$this->load->view('category/listing_category',$data);
	}

	public function delete_category()
	{
		$cat_id = $this->uri->segment(3);
		$this->load->model('listing_category_m');
		$delete_data = $this->listing_category_m->delete_cat($cat_id);

		if($delete_data){
			$this->session->set_flashdata("success", "Success , Your have successfully deleted this category!");
			redirect('listing_category');
		}
		else{
			$this->session->set_flashdata("failed", "Something went wrong!");
			redirect('listing_category');
		}
	}
}

/* End of file Admin_listing_product.php */
/* Location: ./application/controllers/Admin_listing_product.php */