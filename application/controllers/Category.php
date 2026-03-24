<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

    public function category(){ 
		
        $id = $this->input->post('cid');
		$data['category_name'] = $this->input->post('cname');
		
		$id=$this->Category_model->categoryinput($data,$id);

       
		redirect('manage-gallery');
    } 

	public function edit() {
		$id = $this->input->post('id');
		$data = $this->Category_model->categoryid($id);
		echo json_encode($data);
	}

	public function delete() {
		$ids = $this->input->post('id');
		$this->Category_model->delete($ids);
		echo json_encode(['success' => true]);
	}

	public function upload_images() {
        $category_id = $this->input->post('category_id');
        
        if (empty($category_id) || empty($_FILES['gallery_img']['name'][0])) {
            echo json_encode(['success' => false, 'message' => 'Missing category or files']);
            return;
        }
        
        $this->load->model('Category_model');
        
        $image_names = [];
        $config['upload_path'] = FCPATH . 'upload/gallery/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|webp';
        $config['max_size'] = 10240;
        $config['encrypt_name'] = TRUE;
        $config['overwrite'] = FALSE;
        
        $this->load->library('upload', $config);
        
        foreach ($_FILES['gallery_img']['name'] as $key => $val) {
            $_FILES['file']['name'] = $_FILES['gallery_img']['name'][$key];
            $_FILES['file']['type'] = $_FILES['gallery_img']['type'][$key];
            $_FILES['file']['tmp_name'] = $_FILES['gallery_img']['tmp_name'][$key];
            $_FILES['file']['error'] = $_FILES['gallery_img']['error'][$key];
            $_FILES['file']['size'] = $_FILES['gallery_img']['size'][$key];
            
            $this->upload->initialize($config);
            
            if ( ! $this->upload->do_upload('file')) {
                continue;
            }
            
            $upload_data = $this->upload->data();
            $image_names[] = $upload_data['file_name'];
        }
        
        if (!empty($image_names)) {
            $data = [
                'category_id' => $category_id,
                'images' => json_encode($image_names),
            ];
            
            $insert_id = $this->Category_model->add_gallery_images($data);
            
	echo json_encode([
                'success' => true, 
                'id' => $insert_id,
                'message' => count($image_names) . ' images uploaded',
                'images' => $image_names
            ]); $this->upload->clear(); // Clear upload data
        } else {
            echo json_encode(['success' => false, 'message' => 'No valid images uploaded']);
        }
    }
    
    public function delete_gallery_image() {
        $image_id = $this->input->post('id');
        
        if (empty($image_id)) {
            echo json_encode(['success' => false, 'message' => 'Image ID required']);
            return;
        }
        
        $this->load->model('Category_model');
        
        if ($this->Category_model->delete_gallery_image($image_id)) {
            echo json_encode(['success' => true, 'message' => 'Image group deleted successfully']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Delete failed']);
        }
    }
}
