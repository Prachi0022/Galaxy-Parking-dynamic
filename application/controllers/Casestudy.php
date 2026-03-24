<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Casestudy extends CI_Controller {

	public function casestudy(){ 
		
        $id = $this->input->post('cid');
		$data['title'] = $this->input->post('title');
		$data['description'] = $this->input->post('description');
        $data['c_name'] = $this->input->post('c_name');
		$data['location'] = $this->input->post('location');
        $data['park_system'] = $this->input->post('park_system');
		$data['t_cap'] = $this->input->post('t_cap');
        $data['completion'] = $this->input->post('completion'); 

		if (!empty($_FILES['case_img']['name'])) {

			$config['upload_path'] = FCPATH . 'upload/casestudy/';
			$config['allowed_types'] ='*';
			
            $this->load->library('upload', $config);
            $this->upload->initialize($config);

			if (!$this->upload->do_upload('case_img'))
			{
				$error = $this->upload->display_errors();
				echo $error;
				echo $config['upload_path'];
			} 
			else
			{
				$logo = $this->upload->data();
				$data['case_img']=$logo['file_name'];
			}
		}

       
		
		$id=$this->Case_model->caseinput($data,$id);


       
		redirect('manage-casestudy');
    }

	public function get_casestudy(){
		header('Content-Type: application/json');
		$id = $this->input->post('id');
		$data = $this->Case_model->caseid($id);
		echo json_encode($data);
	}

	public function delete(){
		header('Content-Type: application/json');
		$id = $this->input->post('id');
		$this->Case_model->delete_casestudy($id);
		echo json_encode(['success' => true]);
	}
   
}
