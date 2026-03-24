<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

    public function products(){ 
        $this->load->model('Product_model');
        
        $id = $this->input->post('cid');
        $data['title'] = $this->input->post('title');
        $data['description'] = $this->input->post('description');
        $data['status'] = $this->input->post('status') ? 'Active' : 'Inactive';


        // Product image upload (multiple)
        if (!empty($_FILES['product_img']['name'])) {

			$config['upload_path'] = FCPATH . 'upload/product/';
			$config['allowed_types'] ='*';
			
            $this->load->library('upload', $config);
            $this->upload->initialize($config);

			if (!$this->upload->do_upload('product_img'))
			{
				$error = $this->upload->display_errors();
				echo $error;
				echo $config['upload_path'];
			} 
			else
			{
				$logo = $this->upload->data();
				$data['product_img']=$logo['file_name'];
			}
		}


        // MULTIPLE FEATURES (with icon and feature description fields)
        $features = $this->input->post('feature');
        $feature_descs = $this->input->post('f_description');
        $features_array = [];
        if (is_array($features)) {
            foreach ($features as $idx => $feature) {
                if (trim($feature) !== '') {
                    $features_array[] = [
                        'feature' => $feature,
                        'f_description' => $feature_descs[$idx] ?? '',
                    ];
                }
            }
        }
        $data['features'] = !empty($features_array) ? json_encode($features_array, JSON_UNESCAPED_UNICODE) : '';

        // MULTIPLE DOCUMENTS (each with icon and title)
       
        $id = $this->Product_model->productinput($data, $id);

        redirect('manage-product');
    }


    public function delete(){
        $id=$this->input->post('id');
     
        if (!$id) {
            echo json_encode([
                'status' => 'error',
                'message' => 'Invalid ID'
            ]);
            return;
        }

        $deleted=$this->Product_model->delete_product($id);

         if ($deleted) {
            echo json_encode([
                'status' => 'success'
            ]);
        } else {
            echo json_encode([
                'status' => 'error',
                'message' => 'Delete failed'
            ]);
        }
    }
}
