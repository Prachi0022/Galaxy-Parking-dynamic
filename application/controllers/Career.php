<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Career extends CI_Controller {

    public function career(){ 
		
        $id = $this->input->post('cid');
		$data['j_title'] = $this->input->post('j_title');
		$data['j_description'] = $this->input->post('j_description');
        $data['department'] = $this->input->post('department');
		$data['location'] = $this->input->post('location');
        $data['experince'] = $this->input->post('experience');
		$data['j_type'] = $this->input->post('j_type');
        $data['key_resp'] = $this->input->post('key_resp'); 
        $data['req_skill'] = $this->input->post('req_skill'); 
        $data['benefit'] = $this->input->post('benefit'); 
        $data['post_date'] = $this->input->post('post_date'); 
        $data['deadline'] = $this->input->post('deadline'); 
        $data['status'] = $this->input->post('status') ? 'Active' : 'Inactive';

		
		$id=$this->Career_model->careerinput($data,$id);

		redirect('manage-career');
    }
   
    public function get_career(){
		header('Content-Type: application/json');
		$id = $this->input->post('id');
		$data = $this->Career_model->careerid($id);
		echo json_encode($data);
	}

	public function delete(){
		header('Content-Type: application/json');
		$id = $this->input->post('id');
		$this->Career_model->delete_career($id);
		echo json_encode(['success' => true]);
	}
}

