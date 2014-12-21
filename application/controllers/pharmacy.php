<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Pharmacy extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		//$this->load->model('pharmacy/pharmacy_model');
		$this->load->model('pharmacy/pharmacy_model');
	}
	public function index()
	{
		if(($this->session->userdata('user_name')!="") &&  ($this->session->userdata('user_type') == 'pharmacy'))
		{

			$this->welcomepharmacy();
		}
		else{
			$this->logout();
        }

	}
	public function welcomepharmacy()
	{
	if(($this->session->userdata('user_name')!="") &&  ($this->session->userdata('user_type') == 'pharmacy'))
		{
		//$this->config->load('lab');
		$data['title']= 'Welcome pharmacy';
		$this->load->view('pharmacy/includes/header',$data);
		$this->load->view('pharmacy/welcome_view', $data);
		$this->load->view('pharmacy/includes/footer',$data);
		}
		else
		{
		$this->logout();
		}
	}
	
	public function pharmacy_category()
	{
	if(($this->session->userdata('user_name')!="") &&  ($this->session->userdata('user_type') == 'pharmacy'))
		{
		$content['query']= $this->pharmacy_model->pharmacy_submit_list();
		$data['title']= 'Pharmacy Category Entry';
		$this->load->view('pharmacy/includes/header',$data);
		$this->load->view('pharmacy/pharmacy_category', $content);
		$this->load->view('pharmacy/includes/footer',$data);
		}
		else
		{
		$this->logout();
		}

	}
   
	
	
	
	public function pharmacy_submit()
	{
	if(($this->session->userdata('user_name')!="") &&  ($this->session->userdata('user_type') == 'pharmacy'))
		{
					$this->load->library('form_validation');
                $data['title']= 'Pharmacy Category Entry';
               $this->pharmacy_model->pharmacy_submit();

	       $this->pharmacy_category(); 
		
	
	}
		else
		{
		$this->logout();
		}

	}
	
	
	public function pharmacy_generic()
	{
	if(($this->session->userdata('user_name')!="") &&  ($this->session->userdata('user_type') == 'pharmacy'))
		{
		$content['query']= $this->pharmacy_model->pharmacy_submit_list();
		
		//$content['query']= $this->pharmacy_model->pharmacy_generic_list();
		$data['title']= 'Pharmacy Category Entry';
		$this->load->view('pharmacy/includes/header',$data);
		$this->load->view('pharmacy/pharmacy_generic',$content);
		$this->load->view('pharmacy/includes/footer',$data);
		}
		else
		{
		$this->logout();
		}

	}

		public function pharmacy_generic_list()
	{
	if(($this->session->userdata('user_name')!="") &&  ($this->session->userdata('user_type') == 'pharmacy'))
		{
		
		$content['query']= $this->pharmacy_model->pharmacy_generic_list();
		$data['title']= 'Pharmacy Category Entry';
		$this->load->view('pharmacy/includes/header',$data);
		$this->load->view('pharmacy/pharmacy_generic_list', $content);
		$this->load->view('pharmacy/includes/footer',$data);
		}
		else
		{
		$this->logout();
		}

	}

	public function pharmacy_generic_submit()
	{
	if(($this->session->userdata('user_name')!="") &&  ($this->session->userdata('user_type') == 'pharmacy'))
		{
					$this->load->library('form_validation');
                $data['title']= 'Pharmacy Generic Entry';
               $this->pharmacy_model->pharmacy_generic_submit();

	       $this->pharmacy_generic();
	
	}
		else
		{
		$this->logout();
		}

	}
	
		
	public function pharmacy_manufacture()
	{
	if(($this->session->userdata('user_name')!="") &&  ($this->session->userdata('user_type') == 'pharmacy'))
		{
		$content['query']= $this->pharmacy_model->pharmacy_generic_list();
		
		$data['title']= 'Pharmacy Manufacture Entry';
		$this->load->view('pharmacy/includes/header',$data);
		$this->load->view('pharmacy/pharmacy_manufacture',$content);
		$this->load->view('pharmacy/includes/footer',$data);
		}
		else
		{
		$this->logout();
		}

	}

	public function pharmacy_manufacture_submit()
	{
	if(($this->session->userdata('user_name')!="") &&  ($this->session->userdata('user_type') == 'pharmacy'))
		{
					$this->load->library('form_validation');
                $data['title']= 'Pharmacy Generic Entry';
               $this->pharmacy_model->pharmacy_manufacture_submit();

	       $this->pharmacy_manufacture();
	
	}
		else
		{
		$this->logout();
		}

	}

	
	public function pharmacy_manufacture_list()
	{
	if(($this->session->userdata('user_name')!="") &&  ($this->session->userdata('user_type') == 'pharmacy'))
		{
		$content['query']= $this->pharmacy_model->pharmacy_manufacture_list();
		$data['title']= 'Pharmacy Manufacture Entry';
		$this->load->view('pharmacy/includes/header',$data);
		$this->load->view('pharmacy/pharmacy_manufacture_list', $content);
		$this->load->view('pharmacy/includes/footer',$data);
		}
		else
		{
		$this->logout();
		}

	}
	
	public function pharmacy_madicine()
	{
	if(($this->session->userdata('user_name')!="") &&  ($this->session->userdata('user_type') == 'pharmacy'))
		{
		$content['query']= $this->pharmacy_model->pharmacy_manufacture_list();
		$data['title']= 'Pharmacy Medicine Entry';
		$this->load->view('pharmacy/includes/header',$data);
		$this->load->view('pharmacy/pharmacy_madicine', $content);
		$this->load->view('pharmacy/includes/footer',$data);
		}
		else
		{
		$this->logout();
		}

	}

	public function pharmacy_madicine_submit()
	{
	if(($this->session->userdata('user_name')!="") &&  ($this->session->userdata('user_type') == 'pharmacy'))
		{
					$this->load->library('form_validation');
                $data['title']= 'Pharmacy Generic Entry';
               $this->pharmacy_model->pharmacy_madicine_submit();

	       $this->pharmacy_madicine();
	
	}
		else
		{
		$this->logout();
		}

	}
	
	public function pharmacy_madicine_list()
	{
	if(($this->session->userdata('user_name')!="") &&  ($this->session->userdata('user_type') == 'pharmacy'))
		{
			
	$content['query']= $this->pharmacy_model->pharmacy_madicine_list();
		$data['title']= 'Pharmacy Medicine Entry';
		$this->load->view('pharmacy/includes/header',$data);
		$this->load->view('pharmacy/pharmacy_madicine_list', $content);
		$this->load->view('pharmacy/includes/footer',$data);
		}
		else
		{
		$this->logout();
		}
	}
	
	public function pharmacy_package()
	{
	if(($this->session->userdata('user_name')!="") &&  ($this->session->userdata('user_type') == 'pharmacy'))
		{
	$content['query']= $this->pharmacy_model->pharmacy_madicine_list();
	$data['title']= 'Pharmacy Medicine Entry';
		$this->load->view('pharmacy/includes/header',$data);
		$this->load->view('pharmacy/pharmacy_package', $content);
		$this->load->view('pharmacy/includes/footer',$data);
		}
		else
		{
		$this->logout();
		}

	}

	public function pharmacy_package_submit()
	{
	if(($this->session->userdata('user_name')!="") &&  ($this->session->userdata('user_type') == 'pharmacy'))
		{
					$this->load->library('form_validation');
                $data['title']= 'Pharmacy Generic Entry';
               $this->pharmacy_model->pharmacy_package_submit();

	       $this->pharmacy_package();
	
	}
		else
		{
		$this->logout();
		}

	}
	
	public function pharmacy_package_list()
	{
	if(($this->session->userdata('user_name')!="") &&  ($this->session->userdata('user_type') == 'pharmacy'))
		{
	$content['query']= $this->pharmacy_model->pharmacy_package_list();
	$data['title']= 'Pharmacy Medicine Entry';
		$this->load->view('pharmacy/includes/header',$data);
		$this->load->view('pharmacy/pharmacy_package_list', $content);
		$this->load->view('pharmacy/includes/footer',$data);
		}
		else
		{
		$this->logout();
		}

	}













	public function madicine_entry()
	{
	if(($this->session->userdata('user_name')!="") &&  ($this->session->userdata('user_type') == 'pharmacy'))
		{

      $content['query']= $this->pharmacy_model->pharmacy_package_list();
	
		$data['title']= 'Pharmacy Medicine Entry';
		$this->load->view('pharmacy/includes/header',$data);
		$this->load->view('pharmacy/madicine_entry', $content);
		$this->load->view('pharmacy/includes/footer',$data);
		}
		else
		{
		$this->logout();
		}
	}

    public function madicine_entry_submit()
	{
	if(($this->session->userdata('user_name')!="") &&  ($this->session->userdata('user_type') == 'pharmacy'))
		{
     		$this->load->library('form_validation');
                $data['title']= 'Medicine Entry Submited';

             $pharmacycategory = $this->input->post('pharmacycategory');
    $madicingeneric = $this->input->post('madicingeneric');
        $madicinmanufacture = $this->input->post('madicinmanufacture');
        $madicinename = $this->input->post('madicinename'); 
        $madicinepackage = $this->input->post('madicinepackage');



               $this->pharmacy_model->madicine_entry_submit($pharmacycategory,$madicingeneric,$madicinmanufacture,$madicinename, $madicinepackage);
	       $this->madicine_entry();
	}
		else
		{
		$this->logout();
		}

	}



   public function madicine_entry_list()
	{
	if(($this->session->userdata('user_name')!="") &&  ($this->session->userdata('user_type') == 'pharmacy'))
		{
  
   $content['query']= $this->pharmacy_model->madicine_entry_list();
	
		$data['title']= 'Pharmacy Medicine LIst';
		$this->load->view('pharmacy/includes/header',$data);
		$this->load->view('pharmacy/madicine_entry_list', $content);
		$this->load->view('pharmacy/includes/footer',$data);

			}
		else
		{
		$this->logout();
		}

	}
















    function medicine_sell()
    {

		//$this->load->helper('form');
		$this->load->library('form_validation');

		$content['title'] = "Madicine Entry";

	
		
		

       $this->load->view('pharmacy/includes/header',$content);
		$this->load->view('pharmacy/medicine_sell');
		$this->load->view('pharmacy/includes/footer',$content);





	}

	function invoice_entry(){
		
		$this->load->model('RegistrationModel');

		$this->load->library('form_validation');

		$content['title'] = "Lab Invoice Entry";

		$this->RegistrationModel->invoice_entry();




     }
	 
	  public function load()
	
	{
	if(($this->session->userdata('user_name')!="") &&  ($this->session->userdata('user_type') == 'pharmacy'))
		{
		$content['query']= $this->pharmacy_model->madicine_load_list();
		$data['title']= 'Pharmacy Category Entry';
		$this->load->view('pharmacy/includes/header',$data);
		$this->load->view('pharmacy/pharmacy_load', $content);
		$this->load->view('pharmacy/includes/footer',$data);
		}
		else
		{
		$this->logout();
		}
	
	
	}
	
		  public function edit()
	
	{
	if(($this->session->userdata('user_name')!="") &&  ($this->session->userdata('user_type') == 'pharmacy'))
		{
		$content['query']= $this->pharmacy_model->madicine_load_list();
		$data['title']= 'Pharmacy Category Entry';
		$this->load->view('pharmacy/includes/header',$data);
		$this->load->view('pharmacy/pharmacy_edit', $content);
		$this->load->view('pharmacy/includes/footer',$data);
		}
		else
		{
		$this->logout();
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
		redirect('user/logout');
	}
}
?>