<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
			$this->load->model('user_model');
		$this->load->model('lab/lab_model');
		   $this->load->model('admin/reception_model');
		     $this->load->model('admin/admin_model');
	}
	public function index()
	{
		if(($this->session->userdata('user_name')!="") &&  ($this->session->userdata('user_type') == 'admin'))
		{
				
		$this->load->model('reception/reception_model');

			$this->welcomeadmin();
		}
		else{
		$data['title']= 'Welcome';
		
		$this->load->view('admin/includes/header',$data);
		$this->load->view('admin/reception/welcome_view', $data);
		$this->load->view('admin/includes/footer',$data);

		}
	}
	public function welcomeadmin()
	{

	
		//$this->config->load('lab');
		$data['title']= 'Welcome';
		$this->load->view('admin/includes/header',$data);
		//$this->load->view('welcome_view', $data);
		$this->load->view('admin/includes/footer',$data);


        
 
	}
	
	
   public function reception_appointment()
   {
   if(($this->session->userdata('user_name')!="") && ($this->session->userdata('user_type') == 'admin'))
		{

		

					$this->load->library('form_validation');

	$content['title'] = "patient Appointment Entry";
// 	$data['result'] = $this->reception_model->patient();
// $data['resultd'] = $this->reception_model->doctor();
 		$this->load->view('admin/includes/header',$content);
 	    $this->load->view('admin/reception/reception_appointment');
		$this->load->view('admin/includes/footer');
		
		
		

		}
		else{
			$this->logout();
        }

    }
		
		

   public function reception_appointment_submit()
   {
   if(($this->session->userdata('user_name')!="") && ($this->session->userdata('user_type') == 'admin'))
		{
       
		
		


					$this->load->library('form_validation');


                $this->reception_model->reception_appointment_submit();



	$content['title'] = "patient Appointment Entry";
 
// $data['resultd'] = $this->reception_model->doctor();
 		$this->load->view('admin/includes/header',$content);
 	    $this->load->view('admin/reception/reception_appointment');
		$this->load->view('admin/includes/footer');
		
		
		

		}
		else{
			$this->logout();
        }

    }



public function reception_appointment_list()
{



	
	


    if(($this->session->userdata('user_name')!="") && ($this->session->userdata('user_type') == 'admin'))
		{
       


		$this->load->model('reception/reception_model');
	

           
         $data['query'] =  $this->reception_model->show_appointment();
        
      

	$content['title'] = "patient Appointment Entry";
 
// $data['resultd'] = $this->reception_model->doctor();
 		$this->load->view('admin/includes/header',$content);
 	    $this->load->view('admin/reception/reception_appointment_list',$data);
		$this->load->view('admin/includes/footer');
		
		
   

		}
		else
		{
			$this->logout();
        }
	


}




public function reception_indoor()
{

    if(($this->session->userdata('user_name')!="") && ($this->session->userdata('user_type') == 'admin'))
		{

      

	$content['title'] = "Indoor Patient Admission";
 
// $data['resultd'] = $this->reception_model->doctor();
 		$this->load->view('admin/includes/header',$content);
 	    $this->load->view('admin/reception/reception_indoor');
		$this->load->view('admin/includes/footer');
		
		
   

		}
		else
		{
			$this->logout();
        }
	


}



  public function reception_indoor_submit()
   {
   if(($this->session->userdata('user_name')!="") && ($this->session->userdata('user_type') == 'admin'))
		{
       
		
		


					$this->load->library('form_validation');


                $this->reception_model->reception_indoor_submit();



	$content['title'] = "Outdoor Patient Admission";
 
// $data['resultd'] = $this->reception_model->doctor();
 		$this->load->view('admin/includes/header',$content);
 	    $this->load->view('admin/reception/reception_indoor');
		$this->load->view('admin/includes/footer');
		
		
		

		}
		else{
			$this->logout();
        }

    }







public function reception_indoor_list()
{

    if(($this->session->userdata('user_name')!="") && ($this->session->userdata('user_type') == 'admin'))
		{

           
         $data['query'] =  $this->reception_model->show_indoor();
        
      

	$content['title'] = "Show Indoor Patient";
 
// $data['resultd'] = $this->reception_model->doctor();
 		$this->load->view('admin/includes/header',$content);
 	    $this->load->view('admin/reception/reception_indoor_list',$data);
		$this->load->view('admin/includes/footer');
		
		
   

		}
		else
		{
			$this->logout();
        }
	


}







public function reception_outdoor()
{

    if(($this->session->userdata('user_name')!="") && ($this->session->userdata('user_type') == 'admin'))
		{

      

	$content['title'] = "Outdoor Patient Admission";
 
// $data['resultd'] = $this->reception_model->doctor();
 		$this->load->view('admin/includes/header',$content);
 	    $this->load->view('admin/reception/reception_outdoor');
		$this->load->view('admin/includes/footer');
		
		
   

		}
		else
		{
			$this->logout();
        }
	


}



  public function reception_outdoor_submit()
   {
   if(($this->session->userdata('user_name')!="") &&($this->session->userdata('user_type') == 'admin'))
		{
       
		
		


					$this->load->library('form_validation');


                $this->reception_model->reception_outdoor_submit();



	$content['title'] = "Outdoor Patient Admission";
 
// $data['resultd'] = $this->reception_model->doctor();
 		$this->load->view('admin/includes/header',$content);
 	    $this->load->view('admin/reception/reception_outdoor');
		$this->load->view('admin/includes/footer');
		
		
		

		}
		else{
			$this->logout();
        }

    }



public function reception_outdoor_list()
{

    if(($this->session->userdata('user_name')!="") && ($this->session->userdata('user_type') == 'admin'))
		{

           
         $data['query'] =  $this->reception_model->show_outdoor();
        
      

	$content['title'] = "Show Indoor Patient";
 
// $data['resultd'] = $this->reception_model->doctor();
 		$this->load->view('admin/includes/header',$content);
 	    $this->load->view('admin/reception/reception_outdoor_list',$data);
		$this->load->view('admin/includes/footer');
		
		
   

		}
		else
		{
			$this->logout();
        }
	


}






public function reception_indoorbed_submit()
{

    if(($this->session->userdata('user_name')!="") && ($this->session->userdata('user_type') == 'admin'))
		{

           
        $data['query'] =  $this->reception_model->show_indoor();
        
      
      

	$content['title'] = "Show Indoor Patient";
 
// $data['resultd'] = $this->reception_model->doctor();
 		$this->load->view('admin/includes/header',$content);
 	    $this->load->view('admin/reception/reception_indoor_list',$data);
		$this->load->view('admin/includes/footer');
		
		
   

		}
		else
		{
			$this->logout();
        }
	


}




public function reception_labinvoiceentry()
{

    if(($this->session->userdata('user_name')!="") && ($this->session->userdata('user_type') == 'admin'))
		{

      

      ///$this->reception_model->invoice_labtestentry();
	$content['title'] = "Outdoor Patient Admission";
 
// $data['resultd'] = $this->reception_model->doctor();
 		$this->load->view('admin/includes/header',$content);
 	    $this->load->view('admin/reception/reception_labinvoiceentry');
		$this->load->view('admin/includes/footer');
		
		
   

		}
		else
		{
			$this->logout();
        }
	


}


public function reception_labtestinvoiceentry_submit()
{

    if(($this->session->userdata('user_name')!="") && ($this->session->userdata('user_type') == 'admin'))
		{

      

      $this->reception_model->invoice_labtestentry();
	$content['title'] = "Lab Test Invoice Entry";
 
// $data['resultd'] = $this->reception_model->doctor();
 		$this->load->view('admin/includes/header',$content);
 	    $this->load->view('admin/reception/reception_labinvoiceentry');
		$this->load->view('admin/includes/footer');
		
		
   

		}
		else
		{
			$this->logout();
        }
	


}



public function reception_labinvoiceentry_list()
{

    if(($this->session->userdata('user_name')!="") && ($this->session->userdata('user_type') == 'admin'))
		{

           
         $data['query'] =  $this->reception_model->reception_labinvoiceentry_list();
        
      

	$content['title'] = "Show Indoor Patient";
 
// $data['resultd'] = $this->reception_model->doctor();
 		$this->load->view('admin/includes/header',$content);
 	    $this->load->view('admin/reception/reception_labinvoiceentry_list',$data);
		$this->load->view('admin/includes/footer');
		
		
   

		}
		else
		{
			$this->logout();
        }
	


}

	
   public function add_doctor()
   {
   if(($this->session->userdata('user_name')!="") && ($this->session->userdata('user_type') == 'admin'))
		{

		

					$this->load->library('form_validation');

	$content['title'] = "Add New Doctor Entry";
// 	$data['result'] = $this->reception_model->patient();
// $data['resultd'] = $this->reception_model->doctor();
 		$this->load->view('admin/includes/header',$content);
 	    $this->load->view('admin/general/add_doctor');
		$this->load->view('admin/includes/footer');
		
		
		

		}
		else{
			$this->logout();
        }

    }
		



public function doctor_submit()
{

    if(($this->session->userdata('user_name')!="") && ($this->session->userdata('user_type') == 'admin'))
		{

      

      $this->admin_model->doctor_submit();
	$content['title'] = "Lab Test Invoice Entry";
 
// $data['resultd'] = $this->reception_model->doctor();
 		$this->load->view('admin/includes/header',$content);
 	    $this->load->view('admin/general/add_doctor');
		$this->load->view('admin/includes/footer');
		
		
   

		}
		else
		{
			$this->logout();
        }
	


}



public function doctor_list()
{

    if(($this->session->userdata('user_name')!="") && ($this->session->userdata('user_type') == 'admin'))
		{

           
         $data['query'] =  $this->admin_model->doctor_list();
        
      

	$content['title'] = "Show doctor";
 
// $data['resultd'] = $this->reception_model->doctor();
 		$this->load->view('admin/includes/header',$content);
 	    $this->load->view('admin/general/doctor_list',$data);
		$this->load->view('admin/includes/footer');
		
		
   

		}
		else
		{
			$this->logout();
        }
	


}


	
   public function add_employee()
   {
   if(($this->session->userdata('user_name')!="") && ($this->session->userdata('user_type') == 'admin'))
		{

		

					$this->load->library('form_validation');

	$content['title'] = "Add New Employee";
// 	$data['result'] = $this->reception_model->patient();
// $data['resultd'] = $this->reception_model->doctor();
 		$this->load->view('admin/includes/header',$content);
 	    $this->load->view('admin/general/add_employee');
		$this->load->view('admin/includes/footer');
		
		
		

		}
		else{
			$this->logout();
        }

    }
		



public function employee_submit()
{

    if(($this->session->userdata('user_name')!="") && ($this->session->userdata('user_type') == 'admin'))
		{

      

      $this->admin_model->employee_submit();
	$content['title'] = "Lab Test Invoice Entry";
 
// $data['resultd'] = $this->reception_model->doctor();
 		$this->load->view('admin/includes/header',$content);
 	    $this->load->view('admin/general/add_employee');
		$this->load->view('admin/includes/footer');
		
		
   

		}
		else
		{
			$this->logout();
        }
	


}



public function employee_list()
{

    if(($this->session->userdata('user_name')!="") && ($this->session->userdata('user_type') == 'admin'))
		{

           
         $data['query'] =  $this->admin_model->employee_list();
        
      

	$content['title'] = "Show Employee";
 
// $data['resultd'] = $this->reception_model->doctor();
 		$this->load->view('admin/includes/header',$content);
 	    $this->load->view('admin/general/employee_list',$data);
		$this->load->view('admin/includes/footer');
		
		
   

		}
		else
		{
			$this->logout();
        }
	


}


   public function ward_category()
   {
   if(($this->session->userdata('user_name')!="") && ($this->session->userdata('user_type') == 'admin'))
		{

		

					$this->load->library('form_validation');

	$content['title'] = "Insert Ward";
	$data['query'] = $this->admin_model->ward_list();
// 	$data['result'] = $this->reception_model->patient();
// $data['resultd'] = $this->reception_model->doctor();
 		$this->load->view('admin/includes/header',$content);
 	    $this->load->view('admin/general/ward_category',$data);
		$this->load->view('admin/includes/footer');
		
		
		

		}
		else{
			$this->logout();
        }

    }
		

 public function ward_category_submit()
   {
   if(($this->session->userdata('user_name')!="") && ($this->session->userdata('user_type') == 'admin'))
		{

       
  
		  $this->admin_model->ward_category_submit();
		   
		   $this->ward_category();
      
         
}
        
		else{
			$this->logout();
        }

    }





 public function bed_category_submit()
   {
   if(($this->session->userdata('user_name')!="") && ($this->session->userdata('user_type') == 'admin'))
		{

       
  
		  $this->admin_model->bed_category_submit();
		   
		   $this->ward_category();
      
         
}
        
		else{
			$this->logout();
        }

    }














 public function ward_list()
   {
   if(($this->session->userdata('user_name')!="") && ($this->session->userdata('user_type') == 'admin'))
		{

		

					$this->load->library('form_validation');

$data['query'] = $this->admin_model->ward_list();

	$content['title'] = "Insert Ward";
// 	$data['result'] = $this->reception_model->patient();
// $data['resultd'] = $this->reception_model->doctor();
 		$this->load->view('admin/includes/header',$content);
 	    $this->load->view('admin/general/ward_category_list',$data);
		$this->load->view('admin/includes/footer');
		
		
		

		}
		else{
			$this->logout();
        }

    }
		


 public function bed_list()
   {
   if(($this->session->userdata('user_name')!="") && ($this->session->userdata('user_type') == 'admin'))
		{

		

					$this->load->library('form_validation');
					

$data['queryb'] = $this->admin_model->bed_list();
	$content['title'] = "Insert Ward";
// 	$data['result'] = $this->reception_model->patient();
// $data['resultd'] = $this->reception_model->doctor();
 		$this->load->view('admin/includes/header',$content);
 	    $this->load->view('admin/general/bed_category_list',$data);
		$this->load->view('admin/includes/footer');
		
		
		

		}
		else{
			$this->logout();
        }

    }
		
		

public function expense_main_entry()
{

    if(($this->session->userdata('user_name')!="") && ($this->session->userdata('user_type') == 'admin'))
		{


        $data['query'] = $this->admin_model->expnse_show();
     	$content['title'] = "Expense Main Setting";
 
 
 		$this->load->view('admin/includes/header',$content);
 	    $this->load->view('admin/expense/expense_main',$data);
		$this->load->view('admin/includes/footer');
		
		
   

		}
		else
		{
			$this->logout();
        }
	


}




public function expense_main_submit()
   {
   if(($this->session->userdata('user_name')!="") && ($this->session->userdata('user_type') == 'admin'))
		{

       
  
		  $this->admin_model->expense_main_submit();
		   
		   $this->expense_main_entry();
      
         
}
        
		else{
			$this->logout();
        }

    }

public function expense_submain_submit()
   {
   if(($this->session->userdata('user_name')!="") && ($this->session->userdata('user_type') == 'admin'))
		{

       
  
		  $this->admin_model->expense_submain_submit();
		   
		   $this->expense_main_entry();
      
         
}
        
		else{
			$this->logout();
        }

    }





 public function expense_main_list()
   {
   if(($this->session->userdata('user_name')!="") && ($this->session->userdata('user_type') == 'admin'))
		{

		

					$this->load->library('form_validation');
					

$data['queryb'] = $this->admin_model->expnse_show();
	$content['title'] = "Insert Ward";
// 	$data['result'] = $this->reception_model->patient();
// $data['resultd'] = $this->reception_model->doctor();
 		$this->load->view('admin/includes/header',$content);
 	    $this->load->view('admin/expense/expense_main_list',$data);
		$this->load->view('admin/includes/footer');
		
		
		

		}
		else{
			$this->logout();
        }

    }
		
		

 public function expense_sub_list()
   {
   if(($this->session->userdata('user_name')!="") && ($this->session->userdata('user_type') == 'admin'))
		{

		

					$this->load->library('form_validation');
					

$data['queryb'] = $this->admin_model->expense_sub_list();
	$content['title'] = "Insert Ward";
// 	$data['result'] = $this->reception_model->patient();
// $data['resultd'] = $this->reception_model->doctor();
 		$this->load->view('admin/includes/header',$content);
 	    $this->load->view('admin/expense/expense_sub_list',$data);
		$this->load->view('admin/includes/footer');
		
		
		

		}
		else{
			$this->logout();
        }

    }


	
public function myaccount()
{

    if(($this->session->userdata('user_name')!="") && ($this->session->userdata('user_type') == 'admin'))
		{

     	$content['title'] = "My Account Information";
 
 $data['query'] = $this->user_model->myaccount();
 		$this->load->view('admin/includes/header',$content);
 	    $this->load->view('admin/reception/myaccount',$data);
		$this->load->view('admin/includes/footer');
		
		
   

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
		$this->index();
	}
}
?>