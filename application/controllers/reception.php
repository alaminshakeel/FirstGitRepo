<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Reception extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		$this->load->model('lab/lab_model');
	   	$this->load->model('reception/reception_model');
	    $this->load->model('admin/admin_model');
	}
	public function index()
	{
		if(($this->session->userdata('user_name')!="") && ($this->session->userdata('user_type') == 'reception'))
		{
			$this->welcomerec();
		}
		else{
			$data['title']= 'Home';
			$this->load->view('header_view',$data);
			$this->load->view("registration_view.php", $data);
			$this->load->view('footer_view',$data);
		}
	}
	public function welcomerec()
	{
	if(($this->session->userdata('user_name')!="") && ($this->session->userdata('user_type') == 'reception'))
		{

		
		


					$this->load->library('form_validation');

	$content['title'] = "Lab Invoice Entry";
// 	$data['result'] = $this->reception_model->patient();
// $data['resultd'] = $this->reception_model->doctor();
 		$this->load->view('reception/includes/header',$content);
 	
		$this->load->view('reception/includes/footer');
		
		
		

		}
		else{
			$this->logout();
        }
		
		
		
		
	}



   public function reception_appointment()
   {
   if(($this->session->userdata('user_name')!="") && ($this->session->userdata('user_type') == "reception"))
		{
        
		 $data['query'] =  $this->admin_model->doctor_list();
		
					$this->load->library('form_validation');

	$content['title'] = "patient Appointment Entry";
// 	$data['result'] = $this->reception_model->patient();
// $data['resultd'] = $this->reception_model->doctor();
 		$this->load->view('reception/includes/header',$content);
 	    $this->load->view('reception/reception_appointment',$data);
		$this->load->view('reception/includes/footer');
		
		
		

		}
		else{
			$this->logout();
        }

    }

    public function appoinmentprint(){



    if(($this->session->userdata('user_name')!="") && ($this->session->userdata('user_type') == "reception"))
		{

           
        $data['base'] =  $this->reception_model->show_appointment_print();
        
      

	$content['title'] = "patient Appointment Entry";
 
// $data['resultd'] = $this->reception_model->doctor();
 		$this->load->view('reception/includes/header',$content);
 	    $this->load->view('reception/reception_appointment_print',$data);
		$this->load->view('reception/includes/footer');
		
		
   

		}
		else
		{
			$this->logout();
        }




    }

      public function reception_indoor_print(){



    if(($this->session->userdata('user_name')!="") && ($this->session->userdata('user_type') == "reception"))
		{

           
        $data['base'] =  $this->reception_model->show_outdoor_print();
        
      

	$content['title'] = "patient Appointment Entry";
 
// $data['resultd'] = $this->reception_model->doctor();
 		$this->load->view('reception/includes/header',$content);
 	    $this->load->view('reception/reception_outdoor_print',$data);
		$this->load->view('reception/includes/footer');
		
		
   

		}
		else
		{
			$this->logout();
        }




    }


    


















		public function editappoinment()
		{

    if(($this->session->userdata('user_name')!="") && ($this->session->userdata('user_type') == "reception"))
		{

           
         $data['query'] =  $this->reception_model->edit_appointment();
        
      

	$content['title'] = "patient Appointment Entry";
 
// $data['resultd'] = $this->reception_model->doctor();
 		$this->load->view('reception/includes/header',$content);
 	    $this->load->view('reception/reception_appointment_edit',$data);
		$this->load->view('reception/includes/footer');
		
		
   

		}
		else
		{
			$this->logout();
        }
    }
	

	
		

   public function reception_appointment_submit()
   {
   if(($this->session->userdata('user_name')!="") && ($this->session->userdata('user_type') == "reception"))
		{
       
		
		


					$this->load->library('form_validation');


                $this->reception_model->reception_appointment_submit();



	$content['title'] = "patient Appointment Entry";
 
// $data['resultd'] = $this->reception_model->doctor();
 		$this->load->view('reception/includes/header',$content);
 	    $this->load->view('reception/reception_appointment');
		$this->load->view('reception/includes/footer');
		
		
		

		}
		else{
			$this->logout();
        }

    }



public function reception_appointment_list()
{

    if(($this->session->userdata('user_name')!="") && ($this->session->userdata('user_type') == "reception"))
		{

           
         $data['query'] =  $this->reception_model->show_appointment();
        
      

	$content['title'] = "patient Appointment Entry";
 
// $data['resultd'] = $this->reception_model->doctor();
 		$this->load->view('reception/includes/header',$content);
 	    $this->load->view('reception/reception_appointment_list',$data);
		$this->load->view('reception/includes/footer');
		
		
   

		}
		else
		{
			$this->logout();
        }
	


}




public function reception_indoor()
{

    if(($this->session->userdata('user_name')!="") && ($this->session->userdata('user_type') == "reception"))
		{

       $data['base'] =  $this->reception_model->doctor_indoor();
		
       $data['query'] = $this->admin_model->ward_list();
      
        $data['querys'] =  $this->reception_model->patientcode();

	$content['title'] = "Indoor Patient Admission";
 
// $data['resultd'] = $this->reception_model->doctor();
 		$this->load->view('reception/includes/header',$content);
 	    $this->load->view('reception/reception_indoor',$data);
		$this->load->view('reception/includes/footer');
		
		
   

		}
		else
		{
			$this->logout();
        }
	


}



  public function reception_indoor_submit()
   {
   if(($this->session->userdata('user_name')!="") && ($this->session->userdata('user_type') == "reception"))
		{
       
		
		


					$this->load->library('form_validation');


                $this->reception_model->reception_indoor_submit();


                $this->reception_indoor();
		

		}
		else{
			$this->logout();
        }

    }







public function reception_indoor_list()
{

    if(($this->session->userdata('user_name')!="") && ($this->session->userdata('user_type') == "reception"))
		{

           
         $data['query'] =  $this->reception_model->show_indoor();
        
      

	$content['title'] = "Show Indoor Patient";
 
// $data['resultd'] = $this->reception_model->doctor();
 		$this->load->view('reception/includes/header',$content);
 	    $this->load->view('reception/reception_indoor_list',$data);
		$this->load->view('reception/includes/footer');
		
		
   

		}
		else
		{
			$this->logout();
        }
	


}


public function printinddor()
		{

    if(($this->session->userdata('user_name')!="") && ($this->session->userdata('user_type') == "reception"))
		{

           
      $data['query'] =  $this->reception_model->show_indoor_show();
        
      

	$content['title'] = "patient Appointment Entry";
 
// $data['resultd'] = $this->reception_model->doctor();
 		$this->load->view('reception/includes/header',$content);
 	    $this->load->view('reception/reception_indoor_print',$data);
		$this->load->view('reception/includes/footer');
		

		
   

		}
		else
		{
			$this->logout();
        }

		}




public function reception_outdoor()
{

    if(($this->session->userdata('user_name')!="") && ($this->session->userdata('user_type') == "reception"))
		{

      
  $data['base'] =  $this->reception_model->doctor_indoor();
	$content['title'] = "Outdoor Patient Admission";
 
// $data['resultd'] = $this->reception_model->doctor();
 		$this->load->view('reception/includes/header',$content);
 	    $this->load->view('reception/reception_outdoor',$data);
		$this->load->view('reception/includes/footer');
		
		
   

		}
		else
		{
			$this->logout();
        }
	


}



  public function reception_outdoor_submit()
   {
   if(($this->session->userdata('user_name')!="") && ($this->session->userdata('user_type') == "reception"))
		{
       
		
		


					$this->load->library('form_validation');


                $this->reception_model->reception_outdoor_submit();



	$content['title'] = "Outdoor Patient Admission";
 
// $data['resultd'] = $this->reception_model->doctor();
 		$this->load->view('reception/includes/header',$content);
 	    $this->load->view('reception/reception_outdoor');
		$this->load->view('reception/includes/footer');
		
		
		

		}
		else{
			$this->logout();
        }

    }



public function reception_outdoor_list()
{

    if(($this->session->userdata('user_name')!="") && ($this->session->userdata('user_type') == "reception"))
		{

           
         $data['query'] =  $this->reception_model->show_outdoor();
        
      

	$content['title'] = "Show Indoor Patient";
 
// $data['resultd'] = $this->reception_model->doctor();
 		$this->load->view('reception/includes/header',$content);
 	    $this->load->view('reception/reception_outdoor_list',$data);
		$this->load->view('reception/includes/footer');
		
		
   

		}
		else
		{
			$this->logout();
        }
	


}






public function reception_indoorbed_submit()
{

    if(($this->session->userdata('user_name')!="") && ($this->session->userdata('user_type') == "reception"))
		{

           
        $data['query'] =  $this->reception_model->show_indoor();
        
      
      

	$content['title'] = "Show Indoor Patient";
 
// $data['resultd'] = $this->reception_model->doctor();
 		$this->load->view('reception/includes/header',$content);
 	    $this->load->view('reception/reception_indoor_list',$data);
		$this->load->view('reception/includes/footer');
		
		
   

		}
		else
		{
			$this->logout();
        }
	


}




public function reception_labinvoiceentry()
{

    if(($this->session->userdata('user_name')!="") && ($this->session->userdata('user_type') == "reception"))
		{

      

      ///$this->reception_model->invoice_labtestentry();
	$content['title'] = "Outdoor Patient Admission";
 
// $data['resultd'] = $this->reception_model->doctor();
 		$this->load->view('reception/includes/header',$content);
 	    $this->load->view('reception/reception_labinvoiceentry');
		$this->load->view('reception/includes/footer');
		
		
   

		}
		else
		{
			$this->logout();
        }
	


}


public function reception_labtestinvoiceentry_submit()
{

    if(($this->session->userdata('user_name')!="") && ($this->session->userdata('user_type') == "reception"))
		{

      
        $this->reception_model->reception_labtestinvoiceentry_submit();

        //$this->reception_labtestinvoiceentry_submit();
			
        $this->reception_labinvoiceentry();
      

		}
		else
		{
			$this->logout();
        }
	


}



public function reception_labinvoiceentry_list()
{

    if(($this->session->userdata('user_name')!="") && ($this->session->userdata('user_type') == "reception"))
		{

           
         $data['query'] =  $this->reception_model->reception_labinvoiceentry_list();
        
      

	$content['title'] = "Show Indoor Patient";
 
// $data['resultd'] = $this->reception_model->doctor();
 		$this->load->view('reception/includes/header',$content);
 	    $this->load->view('reception/reception_labinvoiceentry_list',$data);
		$this->load->view('reception/includes/footer');
		
		
   

		}
		else
		{
			$this->logout();
        }
	


}






	
public function myaccount()
{

    if(($this->session->userdata('user_name')!="") && ($this->session->userdata('user_type') == "reception"))
		{

      

	$content['title'] = "My Account Information";
 
 $data['query'] = $this->user_model->myaccount();
 		$this->load->view('reception/includes/header',$content);
 	    $this->load->view('reception/myaccount',$data);
		$this->load->view('reception/includes/footer');
		
		
   

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


// all are ajax funciton .... bellow ...

	public function fetch_patients(){		// done !!!

		//echo "<script>alert('hei') </script>";

		$this->lab_model->patients_fetch();


		
	}

	public function fetch_doctors(){

	//echo "<script> alert('docd') </script>";

		$this->lab_model->doctors_fetch();


		
	}

	public function fetch_lab_items(){

		

		$this->lab_model->test_items_fetch();


		
	}

	public function fetch_lab_item_details($itemname){

	

		$this->lab_model->test_items_details_fetch($itemname);
		
	}


}
?>