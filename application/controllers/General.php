<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class General extends CI_Controller {

    public function profile(){ 
		
        $id = $this->input->post('wid');
		$data['company_name'] = $this->input->post('company_name');
		$data['address'] = $this->input->post('address');
        $data['phone'] = $this->input->post('phone');
		$data['email'] = $this->input->post('email');
        $data['instagram'] = $this->input->post('instagram');
		$data['facebook'] = $this->input->post('facebook');
        $data['linkedin'] = $this->input->post('linkedin'); 
		$data['youtube'] = $this->input->post('youtube');

		if (!empty($_FILES['hlogo']['name'])) {

			$config['upload_path'] = FCPATH . 'upload/logo/';
			$config['allowed_types'] ='*';
			
            $this->load->library('upload', $config);
            $this->upload->initialize($config);

			if (!$this->upload->do_upload('hlogo'))
			{
				$error = $this->upload->display_errors();
				echo $error;
				echo $config['upload_path'];
			} 
			else
			{
				$logo = $this->upload->data();
				$data['hlogo']=$logo['file_name'];
			}
		}

        if (!empty($_FILES['flogo']['name'])) {

			$config['upload_path'] = FCPATH . 'upload/logo/';
			$config['allowed_types'] ='*';
			
            $this->load->library('upload', $config);
            $this->upload->initialize($config);

			if (!$this->upload->do_upload('flogo'))
			{
				$error = $this->upload->display_errors();
				echo $error;
				echo $config['upload_path'];
			}
			else
			{
				$logo = $this->upload->data();
				$data['flogo']=$logo['file_name'];
			}
		}

        if (!empty($_FILES['favicon']['name'])) {

			$config['upload_path'] = FCPATH . 'upload/logo/';
			$config['allowed_types'] ='*';
			
            $this->load->library('upload', $config);
            $this->upload->initialize($config);

			if (!$this->upload->do_upload('favicon'))
			{
				$error = $this->upload->display_errors();
				echo $error;
				echo $config['upload_path'];
			}
			else
			{
				$logo = $this->upload->data();
				$data['favicon']=$logo['file_name'];
			}
		}

		
		$id=$this->General_model->auprofile($data,$id);

      


       
		redirect('general-setting');
    }
   
}
