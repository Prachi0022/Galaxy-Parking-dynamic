<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function index()
    {
        $data['count'] = $this->Category_model->get_dashboard_counts();
        $data['blog'] = $this->Blog_model->blog();
        $data['careers'] = $this->Career_model->career();

        $this->load->view('admin/dashboard', $data);
    }

    public function general()
    {
        $data['general'] = $this->General_model->profile();
        $this->load->view('admin/general',$data);
    }

    public function product()
    {
        $data['product'] = $this->Product_model->product();
        $this->load->view('admin/product', $data);
    }

    public function blog()
    {
        $data['blog'] = $this->Blog_model->blog();
        $this->load->view('admin/blog',$data);
    }

    public function career()
    {
        $data['careers'] = $this->Career_model->career();
        $this->load->view('admin/career',$data);
    }

    public function casestudy()
    {
        $data['casestudy'] = $this->Case_model->casestudy();
        $this->load->view('admin/casestudy',$data);
    }

    public function login()
    {
        $this->load->view('admin/login');
    }

    public function gallery()
    {
        if ($this->input->post()) {
            // Handle flash messages if any
            if ($this->session->flashdata('upload_success')) {
                $data['success_msg'] = $this->session->flashdata('upload_success');
            }
            if ($this->session->flashdata('upload_error')) {
                $data['error_msg'] = $this->session->flashdata('upload_error');
            }
        }
		$this->load->model('Category_model');
		$data['category'] = $this->Category_model->category();
		$data['images'] = $this->Category_model->get_gallery_images();
		$data['count'] = $this->Category_model->count_gallery();
       
        $this->load->view('admin/gallery', $data);
    }

    public function gallery_upload()
    {
        $this->load->model('Category_model');
        $this->load->library('upload');
        
        $category_id = $this->input->post('category_id');
        $title = $this->input->post('title') ?: 'Gallery Images';
        
        if (!$category_id) { 
            echo json_encode(['success' => false, 'message' => 'Category is required']);
            return;
        }
        
        $uploaded_files = [];
        $files = $_FILES['gallery_img'];
        
        if (!isset($files['name']) || empty($files['name'][0])) {
            echo json_encode(['success' => false, 'message' => 'You did not select a file to upload.']);
            return;
        }
        
        if (!is_array($files['name'])) {
            $files = [$files];
        }
        
        foreach ($files['name'] as $key => $name) {
            if ($files['error'][$key] == 0 && $files['size'][$key] > 0) {
                // Standard CI multi-file upload pattern
                $_FILES['userfile']['name']     = $files['name'][$key];
                $_FILES['userfile']['type']     = $files['type'][$key];
                $_FILES['userfile']['tmp_name'] = $files['tmp_name'][$key];
                $_FILES['userfile']['error']    = $files['error'][$key];
                $_FILES['userfile']['size']     = $files['size'][$key];
                
                $config['upload_path'] = FCPATH . 'upload/gallery/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg|webp';
                $config['max_size'] = 10240; // 10MB
                $config['encrypt_name'] = TRUE;
                $config['overwrite'] = FALSE;
                
                $this->upload->initialize($config);
                
                if ($this->upload->do_upload('userfile')) {
                    $upload_data = $this->upload->data();
                    $uploaded_files[] = $upload_data['file_name'];
                    // $this->upload->reset();
                    $data = [
                        'category_id' => $category_id,
                        'title' => $title,
                        'images' => $upload_data['file_name'],
                        'status' => 1,
                        'created_at' => date('Y-m-d H:i:s')
                    ];
                    
                    $this->Category_model->add_gallery_images($data);
                } else {
                    echo json_encode(['success' => false, 'message' => $this->upload->display_errors()]);
                    return;
                }
            }
        }
        
        if (!empty($uploaded_files)) {
            
            $this->session->set_flashdata('upload_success', count($uploaded_files) . ' images uploaded successfully!');
            
            echo json_encode([
                'success' => true, 
                'message' => count($uploaded_files) . ' images uploaded successfully!'
            ]);
        } else {
            echo json_encode(['success' => false, 'message' => 'No files uploaded']);
        }
    }
}

