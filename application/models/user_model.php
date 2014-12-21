<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_model extends CI_Model {
    
    public function __construct()
    {
        parent::__construct();
    }
	function login($email,$password,$usertype)
    {
		$this->db->where("email",$email);
        $this->db->where("password",$password);
          $this->db->where("usertype",$usertype);  
        $query=$this->db->get("user");
        if($query->num_rows()>0)
        {
         	foreach($query->result() as $rows)
            {
            	//add all data to session
                $newdata = array(
                	   	'user_id' 		=> $rows->id,
                    	'user_name' 	=> $rows->username,
		                'user_email'    => $rows->email,
                         'user_type'    => $rows->usertype,
	                    'logged_in' 	=> TRUE,
                   );
			}
            	$this->session->set_userdata($newdata);
                return true;            
		}
		return false;
    }





public function myaccount()

     {
         
         $data = $this->session->userdata('user_name');

         $this->db->where('username' , $data);

 $query=$this->db->get("user");
        if($query->num_rows()>0)
        {
         
         return $query = $query->result();



                         
        }
        return false;


     }















	public function add_user()
	{
		$data=array(
			'username'=>$this->input->post('user_name'),
			'email'=>$this->input->post('email_address'),
			'password'=>md5($this->input->post('password'))
			);
		$this->db->insert('user',$data);
	}
}
?>