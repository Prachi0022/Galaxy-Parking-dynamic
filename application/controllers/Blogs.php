<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blogs extends CI_Controller {

    public function blog(){ 
		 
        $id = $this->input->post('bid');
		$data['title'] = $this->input->post('title');
		$data['description'] = $this->input->post('description');
      	$tagsArr = $this->input->post('tags');
        $data['tags'] = is_array($tagsArr)
		? implode(',', $tagsArr)
		: (string) $tagsArr;


		if (!empty($_FILES['image']['name'])) {

			$config['upload_path'] = FCPATH . 'upload/blog/';
			$config['allowed_types'] ='*';
			
            $this->load->library('upload', $config);
            $this->upload->initialize($config);

			if (!$this->upload->do_upload('image'))
			{
				$error = $this->upload->display_errors();
				echo $error;
				echo $config['upload_path'];
			}
			else
			{
				$logo = $this->upload->data();
				$data['image']=$logo['file_name'];
			}
		}

		
		$id=$this->Blog_model->bloginput($data,$id);
       
		redirect('manage-blog');
    }

	public function get_blog(){
		header('Content-Type: application/json');
		$id = $this->input->post('id');
		$data = $this->Blog_model->blogid($id);
		echo json_encode($data);
	}

	public function delete(){
		header('Content-Type: application/json');
		$id = $this->input->post('id');
		$this->Blog_model->delete($id);
		echo json_encode(['success' => true]);
	}
   
}
