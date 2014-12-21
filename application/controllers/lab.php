<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Lab extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		$this->load->model('lab/lab_model');
		//$this->load->model('lab/LabModel');
	}
	public function index()
	{
		if(($this->session->userdata('user_name')!="") && ($this->session->userdata('user_type') =="lab"))
		{
			$this->welcomelab();
		}
		else{
			$data['title']= 'Home';
			$this->load->view('header_view',$data);
			$this->load->view("registration_view.php", $data);
			$this->load->view('footer_view',$data);
		}
	}
	public function welcomelab()
	{
	if(($this->session->userdata('user_name')!="") && ($this->session->userdata('user_type') =="lab"))
		{

		
			$this->load->library('form_validation');

		$content['title'] = "Lab Invoice Entry";
		$data['result'] = $this->lab_model->patient();
$data['resultd'] = $this->lab_model->doctor();
		$this->load->view('lab/includes/header',$content);
		//$this->load->view('lab/invoice_entry',$data);
		$this->load->view('lab/includes/footer');
		
		
		

		}
		else{
			$this->logout();
        }
		
		
		
		
	}
	
	public function invoice_entry()
	{
	if(($this->session->userdata('user_name')!="") &&  ($this->session->userdata('user_type') =="lab"))
		{

		
		
			$this->load->library('form_validation');

		$content['title'] = "Lab Invoice Entry";
$data['result'] = $this->lab_model->patient();
$data['resultd'] = $this->lab_model->doctor();

		$this->load->view('lab/includes/header',$content);
	$this->load->view('lab/invoice_entry',$content);
		$this->load->view('lab/includes/footer');
		
		
		}
		else{
			$this->logout();
        }
		
		
		
	}




	public function test_category_entry(){

	

		$this->load->library('form_validation');

		$content['title'] = "Lab Test Category Entry";

		$this->lab_model->test_category_entry();


		$this->load->view('lab/includes/header',$content);
		$this->load->view('lab/test_category_entry',$content);
		$this->load->view('lab/includes/footer');

	}

	public function test_entry(){

	

		$this->load->library('form_validation');

		$content['title'] = "Lab Test Entry";

		$content['test'] = $this->lab_model->test_entry();


		$this->load->view('lab/includes/header',$content);
		$this->load->view('lab/test_entry',$content);
		$this->load->view('lab/includes/footer');

	}

	public function lab_test_price(){

	

		$this->load->library('form_validation');

		$content['title'] = "Lab Price Entry";

		$content['price'] = $this->lab_model->lab_test_price();

		$this->load->view('lab/includes/header',$content);
		$this->load->view('lab/lab_test_price',$content);
		$this->load->view('lab/includes/footer');

	}

	public function lab_test_price_submit(){
		
		$this->lab_model->lab_test_price();

		$this->lab_test_price();

	}

	public function test_report(){


		$this->load->library('form_validation');

		$content['title'] = "Lab Test Report Entry";

		$this->lab_model->test_report_entry();


		$this->load->view('lab/includes/header',$content);
		$this->load->view('lab/test_report',$content);
		$this->load->view('lab/includes/footer');

	}

	public function test_report_view(){

	
		$this->load->library('form_validation');

		$content['title'] = "Lab Test Report View";

		$content['report'] = $this->lab_model->test_report_view();


		$this->load->view('lab/includes/header',$content);
		$this->load->view('lab/test_report_view',$content);
		$this->load->view('lab/includes/footer');

	}

	public function fetch_category(){		// done !!!

	

		$this->lab_model->testcategory_fetch();


		
	}

	public function fetch_patients(){		// done !!!

		

		$this->lab_model->patients_fetch();


		
	}

	public function fetch_labitems(){

	

		$this->lab_model->test_fetch();


		
	}

	public function fetch_doctors(){

	

		$this->lab_model->doctors_fetch();


		
	}

	public function fetch_lab_items(){

		

		$this->lab_model->test_items_fetch();


		
	}

	public function fetch_lab_item_details($itemname){

	

		$this->lab_model->test_items_details_fetch($itemname);
		
	}

	public function fetch_report($category){

	

		$this->lab_model->report_fetch($category);
		
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