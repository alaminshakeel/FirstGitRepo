





<div class="container">
  
  
  
  
  
  
  
  
  

  
  
  <table border="1">

<tr border="1" bgcolor="green">
  <td width="150px">

  No
       
       </td>

<td width="150px">

     Employee Name Name: 
		   
       </td>
    
<td width="150px">


      Joining Date
   

  </td>

<td width="150px">

     Employee Type
       
     
   
</td>

<td width="150px">


     Address
 
  </td>



<td width="150px">


      Phone No
   

  </td>

<td width="150px">

     Username
       
   
   
</td>
<td width="150px">

    Password
       
   
   
</td>
</tr>







  
  
 <?php 

 foreach ($query as $row) :
  
  
  ?>
  
  
 
 <script type="javascript" type="text/javascript">
 


 </script>

 <?php  $ps =$row->id;  
 if ($ps % 2 ==0) {
  ?>

  <tr  bgcolor="gray">
 <?php

 }  

else
{

  ?>
  <tr >

  <?php
}


 ?>


  <td width="150px">

     <?php   echo $row->id;  ?>
       
       </td>

<td width="150px">

     <?php   echo $row->employeename;  ?>
       
       </td>
    
<td width="150px">

 <?php   echo $row->employeedate;  ?>
      
   

  </td>

<td width="150px">

     <?php   echo $row->usertype;  ?>
       
     
   
</td>

<td width="150px">


     <?php   echo $row->employeeaddress;  ?>
  </td>


<td width="150px">

    <?php   echo $row->employeepone;  ?>
       
   
   
</td>

<td width="150px">


     <?php   echo $row->username;  ?>
   

  </td>
  <td width="150px">


     <?php   echo $row->password;  ?>
   

  </td>
</tr>







<?php

   endforeach;
?>















</table>

</div>

<script type="text/javascript" src="<?php echo base_url(); ?>js/lab/ajax-fetch-lists.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/lab/lab-invoice-validation.js"></script>
<script type="text/javascript">
$('#billdate').datepicker({format:'yyyy-mm-dd'});
</script>

<p>

  &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;
    &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<br>
      &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<br>
        &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;
          &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;







</p>