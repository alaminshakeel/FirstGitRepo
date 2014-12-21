<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin_model extends CI_Model {
    
    public function __construct()
    {
        parent::__construct();
    }

 


  public function  doctor_submit()
     {
       
       $data = array(


       	'doctorname' => $this->input->post('doctorname') , 
       		'doctordate' => $this->input->post('doctordate') , 
       			'doctorspeciality' => $this->input->post('doctorspeciality') , 
       				'doctoraddress' => $this->input->post('doctoraddress') , 
       					'doctorfee' => $this->input->post('doctorfee') , 
       						'doctorphone' => $this->input->post('doctorphone') , 
       						'entryperson' => $this->session->userdata('user_name') ,	
       						
       	);


             $this->db->insert('hospitaldoctor',$data);


     }




  public function doctor_list()

     {
         
     

 $query=$this->db->get("hospitaldoctor");
        if($query->num_rows()>0)
        {
         
         return $query = $query->result();



                         
		}
		return false;


     }



  public function  employee_submit()
     {
       
       $data = array(


       	'employeename' => $this->input->post('employeename') , 
       		'employeedate' => $this->input->post('employeedate') , 
       			'usertype' => $this->input->post('usertype') , 
       				'employeeaddress' => $this->input->post('employeeaddress') , 
       					'employeepone' => $this->input->post('employeepone') , 
       						'username' => $this->input->post('username') , 
       							
       						
      
			'email'=>$this->input->post('email_address'),
			'password'=>md5($this->input->post('password')),
			'entryperson' => $this->session->userdata('user_name') ,
			);
		$this->db->insert('hospitalemployee',$data);
	}




  public function employee_list()

     {
         
     

 $query=$this->db->get("hospitalemployee");
        if($query->num_rows()>0)
        {
         
         return $query = $query->result();



                         
		}
		return false;


     }




public function  ward_category_submit()
     {
       
       $data = array(


        'wardcategory' => $this->input->post('wardname') , 
      );
    $this->db->insert('hostiptalward',$data);
  }

public function  bed_category_submit()
     {
       
       $data = array(


        'wardcategory' => $this->input->post('wardname') , 
        'bedcategory' => $this->input->post('bedname') , 
          'price' => $this->input->post('bedprice') ,

      );
    $this->db->insert('hostiptalbed',$data);
  }


  public function ward_list()

     {
         
     
 
 $query=$this->db->get("hostiptalward");
        if($query->num_rows()>0  ) 
        {
         
         return $query = $query->result();
         



                         
    }
    return false;


     }

      public function bed_list()
     {

 $queryb=$this->db->get("hostiptalbed");

        if($queryb->num_rows()>0  )
        {

           return $queryb = $queryb->result();
                
    }
    return false;


     }



 public function  expense_main_submit()
     {
       
       $data = array(


        'expensecategory' => $this->input->post('expensemain') , 
         
     
      );
    $this->db->insert('expensemain',$data);
  }


 public function  expense_submain_submit()
     {
       
       $data = array(

         'expensecategory' => $this->input->post('expensemain') , 
        'expensesubcategory' => $this->input->post('expensesubcategory') , 
         
     
      );
    $this->db->insert('expensesubmain',$data);
  }




 public function expnse_show()
     {

 $queryb=$this->db->get("expensemain");

        if($queryb->num_rows()>0  )
        {

           return $queryb = $queryb->result();
                
    }
    return false;


     }



public function expense_sub_list()
     {

 $queryb=$this->db->get("expensesubmain");

        if($queryb->num_rows()>0  )
        {

           return $queryb = $queryb->result();
                
    }
    return false;


     }




	
}
?>