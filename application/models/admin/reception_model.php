<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Reception_model extends CI_Model {
    
    public function __construct()
    {
        parent::__construct();
    }

     public function reception_appointment_submit()
     {
       
       $data = array(


       	'apatient' => $this->input->post('apatient') , 
       		'appintmentdate' => $this->input->post('appintmentdate') , 
       			'atime' => $this->input->post('atime') , 
       				'adoctor' => $this->input->post('adoctor') , 
       					'afee' => $this->input->post('afee') , 
       						'aphone' => $this->input->post('aphone') , 

                              'entryperson' => $this->session->userdata('user_name'),
       
       	);


             $this->db->insert('appointment',$data);


     }


     public function show_appointment()

     {
         
       
 $query=$this->db->get("appointment");
        if($query->num_rows()>0)
        {
         
         return $query = $query->result();



                         
		}
		return false;


     }





  public function reception_indoor_submit()
     {
       
       $data = array(


       	'inddorpatientname' => $this->input->post('inddorpatient') , 
       		'indoordate' => $this->input->post('indoordate') , 
       			'indoorage' => $this->input->post('indoorage') , 
       				'indoorbirth' => $this->input->post('indoorbirth') , 
       					'indoorgender' => $this->input->post('indoorgender') , 
       						'indoormerital' => $this->input->post('indoormerital') , 
       							
       							'indoordoctor' => $this->input->post('indoordoctor') , 
       							'indoorblood' => $this->input->post('indoorblood') , 
       							'indooraddress' => $this->input->post('indooraddress') , 
       							'indoorphone' => $this->input->post('indoorphone') , 
       							'indoorconsultfee' => $this->input->post('indoorconsultfee') ,
       							'indoorpatientcode' => $this->input->post('indoorpatientcode') ,
                            
                               'indoorward' => $this->input->post('indoorward') ,
       							'indoorbed' => $this->input->post('indoorbed') ,
                             'ondoorbedcharge' => $this->input->post('ondoorbedcharge') ,
                              'indoorbeddate' => $this->input->post('indoorbeddate') ,
                            


                             'entryperson' => $this->session->userdata('user_name'),
       
       	);


             $this->db->insert('indoorpatient',$data);


     }


     public function show_indoor()

     {
         
      

 $query=$this->db->get("indoorpatient");
        if($query->num_rows()>0)
        {
         
         return $query = $query->result();



                         
		}
		return false;


     }





  public function reception_outdoor_submit()
     {
       
       $data = array(


       	'outdoorpatientname' => $this->input->post('outdoorpatient') , 
       		'outdoordate' => $this->input->post('outdoordate') , 
       			'outdoorage' => $this->input->post('outdoorage') , 
       				'outdoorbirth' => $this->input->post('outdoorbirth') , 
       					'outdoorgender' => $this->input->post('outdoorgender') , 
       						'outdoormerital' => $this->input->post('outdoormerital') , 
       							
       							'outdoordoctor' => $this->input->post('outdoordoctor') , 
       							'outdoorblood' => $this->input->post('outdoorblood') , 
       							'outdooraddress' => $this->input->post('outdooraddress') , 
       							'outdoorphone' => $this->input->post('outdoorphone') , 
       							'outdoorconsultfee' => $this->input->post('outdoorconsultfee') ,
       							'outdoorpatientcode' => $this->input->post('outdoorpatientcode') ,
                              'entryperson' => $this->session->userdata('user_name'),
       
       	);


             $this->db->insert('outdoorpatient',$data);


     }


public function invoice_labtestentry(){

   		$content['patientname'] = $_POST['labitemsn'];

		$n = $_POST['labitemsn'];

		for($i = 1; $i < $n; $i++){

	         $temp = array(
	         	
               
                'patientname' => $this->input->post('patientname'),
                'patientage' => $this->input->post('patientage'),
                'patientsex' => $this->input->post('patientsex'),
                'mondoc' => $this->input->post('mondoc'),
                'billdate' => $this->input->post('billdate'),
                'refdoc' => $this->input->post('refdoc'),
                 'doccom' => $this->input->post('doccom'),
                   
	         	'labitemsn' => $this->input->post('labitemsn'.$i),
	         	'labitemname' => $this->input->post('labitemname'.$i),
	         	'labitemmrp' => $this->input->post('labitemmrp'.$i),
	         	'labitemqty' => $this->input->post('labitemqty'.$i),
	         	'labmrptotal' => $this->input->post('labmrptotal'.$i),
	         	'patientcode' => $this->input->post('patientcode'.$i),
	         	 'entryperson' => $this->session->userdata('user_name'),
	         	);			

        	$this->db->insert('receptioninvoiceentry',$temp);
			
		}
	}







  public function reception_labinvoiceentry_list()

     {
         
     

 $query=$this->db->get("receptioninvoiceentry");
        if($query->num_rows()>0)
        {
         
         return $query = $query->result();



                         
		}
		return false;


     }






  public function reception_indoorbed_submit()
     {
       
       $data = array(


       	'inddorpatientname' => $this->input->post('inddorpatient') , 
       		
       		'bedstatus' => $this->input->post('bedstatus') ,
       							'indoorpatientcode' => $this->input->post('indoorpatientcode') ,
                              'entryperson' => $this->session->userdata('user_name'),
                           
       'bedstatus' => '1' , 
   

       	);

         
              $bed = array(


       	'bedstatus' => '1' , 
       		
       				
       	);


           $this->db->where($data);
            $this->db->update('indoorpatient',$bed);
         
        

     }













  public function show_outdoor()

     {
         
     

 $query=$this->db->get("outdoorpatient");
        if($query->num_rows()>0)
        {
         
         return $query = $query->result();



                         
		}
		return false;


     }




	
}
?>