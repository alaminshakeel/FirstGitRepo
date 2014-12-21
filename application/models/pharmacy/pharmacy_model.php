<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Pharmacy_model extends CI_Model {
    
    public function __construct()
    {
        parent::__construct();
    }
	
	
     public function pharmacy_submit()
     {
       
       $data = array(


       	'madicinecategory' => $this->input->post('pharmacycategory'),
       		   'entryperson' => $this->session->userdata('user_name'),
       
       	);


             $this->db->insert('madicinecategory',$data);
           

     }
	 
	 
	 
	   public function pharmacy_submit_list()

     {
         
       
 $query=$this->db->get("madicinecategory");
        if($query->num_rows()>0)
        {
         
         return $query = $query->result();
                         
		}
		return false;


     }
	 
	  public function pharmacy_generic_submit()
     {
       
       $data = array(

            'madicinecategory' => $this->input->post('pharmacycategory') ,
       	'madicingeneric' => $this->input->post('madicinegeneric') , 
       		   'entryperson' => $this->session->userdata('user_name'),
       
       	);


             $this->db->insert('madicingeneric',$data);


     }
	 
	 
	 
	   public function pharmacy_generic_list()

     {
         
       
 $query=$this->db->get("madicingeneric");
        if($query->num_rows()>0)
        {
         
         return $query = $query->result();
                         
		}
		return false;


     }


	 public function pharmacy_manufacture_submit()
     {
       
       $data = array(
  'pharmacycategory' => $this->input->post('pharmacycategory') , 
    'madicingeneric' => $this->input->post('madicingeneric') , 
       	'madicinmanufacture' => $this->input->post('manufacture') , 
       		   'entryperson' => $this->session->userdata('user_name'),
       
       	);


             $this->db->insert('madicinmanufacture',$data);


     }
	 
	 
	 
	   public function pharmacy_manufacture_list()

     {
         
       
 $query=$this->db->get("madicinmanufacture");
        if($query->num_rows()>0)
        {
         
         return $query = $query->result();
                         
		}
		return false;


     }
	 
public function pharmacy_madicine_submit()
     {
       
       $data = array(

  'pharmacycategory' => $this->input->post('pharmacycategory') , 
    'madicingeneric' => $this->input->post('madicingeneric') , 
        'madicinmanufacture' => $this->input->post('madicinmanufacture') ,
       	'madicinename' => $this->input->post('madicinename') , 
       		   'entryperson' => $this->session->userdata('user_name'),
       
       	);


             $this->db->insert('madicinename',$data);


     }
	 
	 
	 
	   public function pharmacy_madicine_list()

     {
         
       
 $query=$this->db->get("madicinename");
        if($query->num_rows()>0)
        {
         
         return $query = $query->result();
                         
		}
		return false;


     }
	 
	 
	 	 
public function pharmacy_package_submit()
     {
       
       $data = array(

  'pharmacycategory' => $this->input->post('pharmacycategory') , 
    'madicingeneric' => $this->input->post('madicingeneric') , 
        'madicinmanufacture' => $this->input->post('madicinmanufacture') ,
        'madicinename' => $this->input->post('madicinename') , 
           'madicinename' => $this->input->post('madicinename') , 
       	'madicinepackage' => $this->input->post('madicinepackage') , 
       		   'entryperson' => $this->session->userdata('user_name'),
       
       	);


             $this->db->insert('madicinepackage',$data);


     }
	 
	 
	 
	   public function pharmacy_package_list()

     {
         
       
 $query=$this->db->get("madicinepackage");
        if($query->num_rows()>0)
        {
         
         return $query = $query->result();
                         
		}
		return false;


     }
	 
	
      
	 

	public function madicine_entry_submit($pharmacycategory,$madicingeneric,$madicinmanufacture,$madicinename, $madicinepackage)
     {



 $data = array(

  'pharmacycategory' => $this->input->post('pharmacycategory') , 
    'madicingeneric' => $this->input->post('madicingeneric') , 
        'madicinmanufacture' => $this->input->post('madicinmanufacture') ,
        'madicinename' => $this->input->post('madicinename') , 
       
        'madicinepackage' => $this->input->post('madicinepackage') ,

          'totalqty' => $this->input->post('totalqty') ,
        'expiredate' => $this->input->post('expiredate') , 
           'storebox' => $this->input->post('storebox') , 
        'purchaseprice' => $this->input->post('purchaseprice') , 
              'sellingprice' => $this->input->post('sellingprice') , 
             'entryperson' => $this->session->userdata('user_name'),
       
        );

       $this->db->where("pharmacycategory",$pharmacycategory);
        $this->db->where("madicingeneric",$madicingeneric);
          $this->db->where("madicinmanufacture",$madicinmanufacture);  
           $this->db->where("madicinename",$madicinename);
        $this->db->where("madicinepackage",$madicinepackage);
         
        $query=$this->db->get("medicine");
        if($query->num_rows()>0)
        {
       
	   
         $updates = $query->row('totalqty')+ $this->input->post('totalqty');
		 
		 $data = array('totalqty' =>  $updates,
		  'expiredate' => $this->input->post('expiredate') , 
           'storebox' => $this->input->post('storebox') , 
        'purchaseprice' => $this->input->post('purchaseprice') , 
              'sellingprice' => $this->input->post('sellingprice') , 
             'entryperson' => $this->session->userdata('user_name'),
		 
		 
		 
		 );
		 
		    $this->db->where("pharmacycategory",$pharmacycategory);
        $this->db->where("madicingeneric",$madicingeneric);
          $this->db->where("madicinmanufacture",$madicinmanufacture);  
           $this->db->where("madicinename",$madicinename);
        $this->db->where("madicinepackage",$madicinepackage);
	   
 $this->db->update('medicine',$data);

     }

     else
     {

 $this->db->insert('medicine',$data);

     }



   }
   
  
	  public function  madicine_load_list()

     {
         $id= $this->input->post('id');
      $this->db->where('id', $id);
 $query=$this->db->get("medicine");
        if($query->num_rows()>0)
        {
         
         return $query = $query->result();
                         
		}
		return false;


     }
	 
	 
	 
	   public function madicine_entry_list()

     {
 $query=$this->db->get("medicine");
        if($query->num_rows()>0)
        {
         return $query = $query->result();                   
    }
    return false;
     }
   
	 
	 
	 
}
?>