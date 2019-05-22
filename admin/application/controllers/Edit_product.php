<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_product extends CI_Controller {

	function __construct(){
        parent::__construct();
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('admin_login');
        }
    }

	public function index()
	{
		$this->load->model('edit_product_m');
		$product_id = $this->uri->segment(2);
		$data['get_all_category'] = $this->edit_product_m->get_category($product_id);
		$data['fetch_product'] = $this->edit_product_m->fetch_pro($product_id);
		$data['fetch_image'] = $this->edit_product_m->fetch_pro_img($product_id);
		$this->load->view('products/edit_product',$data);
	}

	public function ajax_del_p_img(){
		$this->load->model('edit_product_m');
		$image_id = $this->input->post('img_id');
		$image_name = $this->input->post('img_name');
		$delete_image = $this->edit_product_m->delete_image($image_id,$image_name);
	}

	public function update_product()
	{
		$this->load->model('edit_product_m');
		$product_id = $this->uri->segment(3);
		$user_id = $this->session->userdata['logged_in']['user_id'];
		$category = $this->input->post('category');
		$product_name = $this->input->post('product_name');
		$product_title = $this->input->post('product_title');
		$product_desc = $this->input->post('product_desc');
		$wholesale_price = $this->input->post('wholesale_price');
		$retail_price = $this->input->post('retail_price');
		$designed_by = $this->input->post('designed_by');
		$p_sku = $this->input->post('p_sku');
		$meta_tags = $this->input->post('meta_tags');
		$meta_keyword = $this->input->post('meta_keyword');
		$meta_desc = $this->input->post('meta_desc');
		$ad_date = time();
		$product_status = '1';
		
		$fetch_product = $this->edit_product_m->fetch_pro($product_id);
	
		if(!empty($_FILES['meta_image']['name'])){
			$config['upload_path'] = 'uploads/meta_images/';
			$config['allowed_types'] = 'jpg|jpeg|png|gif';
			$config['file_name'] = rand(999,99999).$_FILES['meta_image']['name'];
			
			$this->load->library('upload',$config);
			$this->upload->initialize($config);
			
			if($this->upload->do_upload('meta_image')){
				$uploadData = $this->upload->data();
				$path = base_url('uploads/meta_images/');
				$meta_image = $path.''.$uploadData['file_name'];
			}
		}else{
			$meta_image = $fetch_product->product_meta_image;
		}

		if(!empty($_FILES['design_image']['name'])){
			$config['upload_path'] = 'uploads/design_images/';
			$config['allowed_types'] = 'jpg|jpeg|png|gif';
			$config['file_name'] = rand(999,99999).$_FILES['design_image']['name'];
			
			$this->load->library('upload',$config);
			$this->upload->initialize($config);
			
			if($this->upload->do_upload('design_image')){
				$uploadData = $this->upload->data();
				$path = base_url('uploads/design_images/');
				$design_image = $path.''.$uploadData['file_name'];
			}
		}else{
			$design_image = $fetch_product->product_design_img;
		}

		$records = array(	'user_id'=>$user_id,
							'product_category_id'=>$category,
							'product_name'=>$product_name,
							'product_title'=>$product_title,
							'product_desc'=>$product_desc,
							'product_designed_by'=>$designed_by,
							'product_wholesale_price'=>$wholesale_price,
							'product_retail_price'=>$retail_price,
							'product_design_img' => $design_image,
							'product_sku'=>$p_sku,
							'product_meta_tags'=>$meta_tags,
							'product_meta_image'=>$meta_image,
							'product_meta_keyword'=>$meta_keyword,
							'product_meta_desc'=>$meta_desc,
							'product_updated_date'=>$ad_date,
							'product_status'=>$product_status
						);

		$update_product = $this->edit_product_m->update_product($product_id,$records);
		

		if($update_product != ''){
			if(!empty($_FILES['p_image']['name'])){
				$this->load->library('upload');
				$image = array();
				$filesCount = count($_FILES['p_image']['name']);
				
				for($i = 0; $i < $filesCount; $i++){
					$_FILES['userFile']['name'] = $_FILES['p_image']['name'][$i];
					$_FILES['userFile']['type'] = $_FILES['p_image']['type'][$i];
					$_FILES['userFile']['tmp_name'] = $_FILES['p_image']['tmp_name'][$i];
					$_FILES['userFile']['error'] = $_FILES['p_image']['error'][$i];
					$_FILES['userFile']['size'] = $_FILES['p_image']['size'][$i];

					$config['upload_path'] = 'uploads/product_images/';
					$config['allowed_types'] = 'jpg|jpeg|png|gif';
					$config['file_name'] = rand(999,99999).$_FILES['p_image']['name'][$i];
					
					$this->load->library('upload',$config);
					$this->upload->initialize($config);
					
					if($this->upload->do_upload('userFile')){
						$fileData = $this->upload->data();
						$path = base_url('uploads/product_images/');
						$product_image[$i]['file_name'] = $path.''.$fileData['file_name'];
						$product_image[$i]['created'] = date("Y-m-d H:i:s");
						$product_image[$i]['modified'] = date("Y-m-d H:i:s");
					}
					$record = array('product_id'=>$update_product,'product_image_path'=>$product_image[$i]['file_name']);
					$update_image = $this->edit_product_m->update_pro_img($record);
				}
			}

				$this->session->set_flashdata("success", "Product Updated Successfully!");
				redirect('edit_product/'.$product_id);
			}else{
				$this->session->set_flashdata("failed", "Something Went Wrong!");
				redirect('edit_product/'.$product_id);
			}
	}
}

/* End of file Edit_dealers.php */
/* Location: ./application/controllers/Edit_dealers.php */