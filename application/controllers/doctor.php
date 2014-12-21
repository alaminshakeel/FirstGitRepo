<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Lab extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		$this->load->model('lab/lab_model');
	}
	public function index()
	{
		if(($this->session->userdata('user_name')!=""))
		{
			$this->welcomelab();
		}
		else{
		$data['title']= 'Welcome';
		$this->load->view('lab/header_view',$data);
		$this->load->view('lab/welcome_view', $data);
		$this->load->view('lab/footer_view',$data);
		}
	}
	public function welcomelab()
	{
	
		//$this->config->load('lab');
		$data['title']= 'Welcome';
		$this->load->view('lab/header_view',$data);
		$this->load->view('lab/welcome_view', $data);
		$this->load->view('lab/footer_view',$data);

	}
	
	public function invoice_entry()
	{
	
		//$this->config->load('lab');
	$data['title']= 'Welcome';
		$this->load->view('lab/header_view',$data);
		$this->load->view('lab/invoice_entry', $data);
		$this->load->view('lab/footer_view',$data);
	

	}

	public function invoice_report()
	{
	
		//$this->config->load('lab');
		$data['title']= 'Welcome';
		$this->load->view('lab/header_view',$data);
		$this->load->view('lab/invoice_report', $data);
		$this->load->view('lab/footer_view',$data);
		
		
	

	}
	
	public function test_entry()
	{
	
		//$this->config->load('lab');
		$data['title']= 'Welcome';
		$this->load->view('lab/header_view',$data);
		$this->load->view('lab/test_entry', $data);
		$this->load->view('lab/footer_view',$data);
		
		
	

	}
	
	public function test_report()
	{
	
		//$this->config->load('lab');
	$data['title']= 'Welcome';
		$this->load->view('lab/header_view',$data);
		$this->load->view('lab/test_report', $data);
		$this->load->view('lab/footer_view',$data);
		
		
	

	}
	
	
	
	
	public function logout()
	{
		$newdata = array(
		'user_id'   =>'',
		'user_name'  =>'',
		'user_email'     => '',
		'logged_in' => FALSE,
		);
		$this->session->unset_userdata($newdata );
		$this->session->sess_destroy();
		$this->index();
	}
}
?>