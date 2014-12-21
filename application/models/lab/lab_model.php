<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Lab_model extends CI_Model {
    
 
    
    public function __construct()
    {
        parent::__construct();
    }
	function patient()
    {
	       $this->db->select('*');
        $this->db->from('patient');
        $query = $this->db->get();
        return $result = $query->result();
	
    }
	function doctor()
    {
	       $this->db->select('*');
        $this->db->from('doctor');
        $query = $this->db->get();
        return $resultd = $query->result();
	
    }


public function invoice_entry(){

        if(isset($_POST['labitemsn'])){

            $n = $_POST['labitemsn'];

            for($i = 1; $i < $n; $i++){

             $data = array(
                'labitemsn' => $this->input->post('labitemsn'.$i),
                'labitemname' => $this->input->post('labitemname'.$i),
                'labitemmrp' => $this->input->post('labitemmrp'.$i),
                'labitemqty' => $this->input->post('labitemqty'.$i),
                'labmrptotal' => $this->input->post('labmrptotal'.$i),
                'entryperson'  => $this->session->user_data('user_name'),
                );          
        
            $this->db->insert('invoice_entry',$data);
            
            }
        }   

    }


    public function test_entry(){

        if(isset($_POST['categoryname'])){

            $data = array(

                'categoryname' => $this->input->post('categoryname'),
                'labtestitemname' => $this->input->post('labtestitemname'),
                'unitname' => $this->input->post('unitname'),
                'itemprice' => $this->input->post('itemprice'),
                'refvalue' => $this->input->post('refvalue'),

            );

            $this->db->insert('lab_test_entry',$data);

        }

        $query = $this->db->get('lab_test_entry');
        return $query->result_array();      
    }

    public function lab_test_price(){

        if(isset($_POST['categoryname'])){

            $data = array(

                'labtestname' => $this->input->post('categoryname'),
                'labtestprice' => $this->input->post('labtestprice'),
                'labitemqty' => $this->input->post('labitemqty'),
                'entryperson' => $this->session->userdata('user_name')

            );

            $this->db->insert('test_entry',$data);

        }

        $query = $this->db->get('test_entry');
        return $query->result_array();        

    }


    public function test_report_entry(){

        if(isset($_POST['categoryname'])){

            $sn = 1;

            for ($i=1; $this->input->post('sn'.$i) != null ; $i++) { 
                
                $data = array(

                    'patientname' => $this->input->post('patientname'),
                    'age' => $this->input->post('patientage'),
                    'sex' => $this->input->post('patientsex'),
                    'mondoc' => $this->input->post('mondoc'),
                    'testdate' => $this->input->post('billdate'),
                    'refdoc' => $this->input->post('refdoc'),
                    'patientcode' => $this->input->post('patientcode'),
                    'entryperson' => $this->session->userdata('user_name'),
                    'testcategory' => $this->input->post('categoryname'),
                    'testitemname' => $this->input->post('labtestitemname'.$i),
                    'testresultvalue' => $this->input->post('resvalue'.$i)
                    
                                
                );

                $this->db->insert('test_report_entry',$data);

            }

            

        }

        $query = $this->db->get('test_entry');
        return $query->result_array();      
    }

    
    public function test_report_view(){

        $query = $this->db->get('test_report_entry');
        return $query->result_array();      
    }



    public function test_category_entry(){

        if(isset($_POST['categoryname'])){

            $temp = array(
            'category_name' => $this->input->post('categoryname'),
            );          
    
            $this->db->insert('test_category_entry',$temp);

        }

    }

    public function get_test_item_list(){

        
        $query = $this->db->get('test_entry');

        return $query->result_array();
    }

    public function testcategory_fetch(){

        $query = $this->db->get('test_category_entry');
        
        $rows = $query->result_array();

        $data = "<select>";
        foreach ($rows as $key => $row) {
            $data .= "<option value='". $row['category_name'] ."'> ". $row['category_name'] . "</option>";
        }
        $data .= "</select>";
        echo $data;

    }

    public function patients_fetch(){

        $query = $this->db->get('indoorpatient');
        $rows = $query->result_array();

        //echo "<script>alert('hei') </script>";

        $data = "<datalist id='patient-list'>";

        foreach ($rows as $key => $row) {
            $data.= "<option value='". $row['inddorpatientname'] . "'>";
        }
        $data .= "</datalist>";

        echo $data;

    }


    public function doctors_fetch(){

        $query = $this->db->get('hospitaldoctor');
        $rows = $query->result_array();

        //echo "<script> alert('docmodel') </script>";

        $data = "<option value=''> Select Doctor </option>";
        foreach ($rows as $key => $row) {
            $data .= "<option value='". $row['doctorname'] ."'> ". $row['doctorname'] . "</option>";
        }
        $data .= "";
        echo $data;

    }

    public function test_items_fetch(){

        $query = $this->db->get('test_entry');
        $rows = $query->result_array();

        $data = "<datalist id='labitem-list'>";

        foreach ($rows as $key => $row) {
            $data.= "<option value='". $row['labtestname'] . "'>";
        }
        $data .= "</datalist>";

        echo $data;

    }

    public function test_items_details_fetch($itemname){

        $query = $this->db->get_where('test_entry',array('labtestname' => $itemname));
        $rows = $query->result_array();
        //var_dump($rows);
        if($query->num_rows()==1)
        {

            foreach ($rows as $key => $row) {
                
                $data = $row['labtestprice'];
            }

            echo $data;
            
        }
        else{
            echo "<script> alert( 'Unexpected Error' ) </script>";
        }
        

        
    }


    public function report_fetch($category){

        $sn = 1;

        $query = $this->db->get_where('lab_test_entry',array('categoryname' => $category));

        if($query->num_rows() > 0){
            
            $rows = $query->result_array();

            $data = "";
            foreach ($rows as $key => $row) {
                
                $data .= "<tr>";
                $data .= "<td><input type='hidden' name='sn$sn' value='$sn' >" . $sn . "</td>";
                $data .= "<td><input type='hidden' name='labtestitemname$sn' value='$row[labtestitemname]' >" . $row['labtestitemname'] . "</td>";
                $data .= "<td> <input type='text' name='resvalue$sn' value='' id='resvalue$sn'> </td>";
                $data .= "<td>" . $row['unitname'] . "</td>";
                $data .= "<td>" . $row['refvalue'] . "</td>";
                $data .= "<td><input type='hidden' name='categoryname' value='$category' ></td>";
                $data .= "</tr>";

                $sn++ ;
            }

            echo $data;
        }
    }




















    
	function user()
    {
	       $this->db->select('*');
        $this->db->from('user');
        $query = $this->db->get();
        return $result = $query->result();
	
    }
}
?>