





<div class="container">
  
  
  
  
  
  
  
  
  

  
  
  <table border="1">

<tr border="1">
  <td width="150px">

  Print Appointment
       
       </td>

<td width="150px">

     Patient Name: 
		   
       </td>
    
<td width="150px">


      Appintment Date
   

  </td>

<td width="150px">

     Appointment Time
       
     
   
</td>

<td width="150px">


     Consulting Doctor
 
  </td>


<td width="150px">

     Consultation Fee: 
       
   
   
</td>

<td width="150px">


      Phone No
   

  </td>
  <td width="150px">


      Entry Person
   

  </td>
</tr>







  
  
 <?php 

 foreach ($query as $row) :
  
  
  ?>
  
  
 

 

<tr border="1">
  <td width="150px">

  <input type="button" value="print" onclick="window.print()">
       
       </td>

<td width="150px">

     <?php   echo $row->apatient;  ?>
       
       </td>
    
<td width="150px">

 <?php   echo $row->appintmentdate;  ?>
      
   

  </td>

<td width="150px">

     <?php   echo $row->atime;  ?>
       
     
   
</td>

<td width="150px">


     <?php   echo $row->adoctor;  ?>
  </td>


<td width="150px">

    <?php   echo $row->afee;  ?>
       
   
   
</td>

<td width="150px">


     <?php   echo $row->aphone;  ?>
   

  </td>
  <td width="150px">


     <?php   echo $row->entryperson;  ?>
   

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