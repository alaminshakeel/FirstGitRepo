<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}
	public function index()
	{
		if(($this->session->userdata('user_name')!=""))
		{
			$this->welcome();
		}
		else{
			$data['title']= 'Home';
			$this->load->view('header_view',$data);
			$this->load->view("registration_view.php", $data);
			$this->load->view('footer_view',$data);
		}
	}
	public function welcome()
	{
	
	if($this->input->post('account') == 'admin')
	{
		 redirect('admin/welcomeadmin');
	}
		else if($this->input->post('account') == 'reception')
	{
		 
		
		 redirect('reception/welcomerec');
	}
		
	else if($this->input->post('account') == 'doctor')
	{
		 redirect('doctor/welcomelab');
	}
		
		else if($this->input->post('account') == 'account')
	{
		 redirect('account/welcomelab');
	}
		else if($this->input->post('account') == 'pharmacy')
	{ 
		 redirect('pharmacy/welcomepharmacy');
	}
		
		else if($this->input->post('account') == 'lab')
	{
		 redirect('lab/welcomelab');
	}
	else
	{
	$data['title']= 'Home';
			$this->load->view('header_view',$data);
			$this->load->view("registration_view.php", $data);
			$this->load->view('footer_view',$data);
	
	}
		
	
	/*
	$this->config->load('lab');
		$data['title']= 'Welcome';
		$this->load->view('header_view',$data);
		$this->load->view('welcome_view.php', $data);
		$this->load->view('footer_view',$data);*/
	}
	public function login()
	{
		$email=$this->input->post('email');
		
		$password=md5($this->input->post('pass'));
         $account=$this->input->post('account');
		$result=$this->user_model->login($email,$password, $account);
		
		
		if($result) $this->welcome();
		
		else        $this->index();
		
		

      
	}
	public function thank()
	{
	
		$data['title']= 'Thank';
		$this->load->view('header_view',$data);
		$this->load->view('thank_view.php', $data);
		$this->load->view('footer_view',$data);
	}
	public function registration()
	{
		$this->load->library('form_validation');
		// field name, error message, validation rules
		$this->form_validation->set_rules('user_name', 'User Name', 'trim|required|min_length[4]|xss_clean');
		$this->form_validation->set_rules('account', 'email', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
		$this->form_validation->set_rules('con_password', 'Password Confirmation', 'trim|required|matches[password]');

		if($this->form_validation->run() == FALSE)
		{
			$this->index();
		}
		else
		{
			$this->user_model->add_user();
			$this->thank();
		}
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