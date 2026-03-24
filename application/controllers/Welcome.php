<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('web/header');
		$this->load->view('home');
		$this->load->view('web/footer');
	}

	public function coming(){
		$this->load->view('web/comingsoon'); 
	}

	public function about()
	{
		$this->load->view('web/header');
		$this->load->view('about-galaxy');
		$this->load->view('web/footer');
	}

	public function about_parkx()
	{
		$this->load->view('web/header');
		$this->load->view('about-parkx');
		$this->load->view('web/footer');
	}

	public function service()
	{
		$this->load->view('web/header');
		$this->load->view('service');
		$this->load->view('web/footer');
	}

	public function casestudy()
	{
		$this->load->view('web/header');
		$this->load->view('case_study');
		$this->load->view('web/footer');
	}

	public function contact()
	{
		$this->load->view('web/header');
		$this->load->view('contact');
		$this->load->view('web/footer');
	}

	public function blog()
	{
		$this->load->view('web/header');
		$this->load->view('blog');
		$this->load->view('web/footer');
	}
	
	// Career Page Methods
	public function careers()
	{
		$this->load->view('web/header');
		$this->load->view('careers');
		$this->load->view('web/footer');
	}
	
	public function job_detail()
	{
		$this->load->view('web/header');
		$this->load->view('job_detail');
		$this->load->view('web/footer');
	}
	
	public function apply()
	{
		$this->load->view('web/header'); 
		$this->load->view('apply');
		$this->load->view('web/footer');
	}

	public function gallery()
	{
		$this->load->view('web/header');
		$this->load->view('gallery');
		$this->load->view('web/footer');
	}

	public function casestudy_detail()
	{
		$this->load->view('web/header');
		$this->load->view('casestudy_detail');
		$this->load->view('web/footer');
	}

	public function blog_detail()
	{
		$this->load->view('web/header');
		$this->load->view('blogdetail');
		$this->load->view('web/footer');
	}
}
