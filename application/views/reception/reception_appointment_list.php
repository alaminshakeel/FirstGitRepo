





<div class="container">
  
  
  
  
  
  
  
  
  

  
  
  <table border="1">

<tr border="1" bgcolor="green" width="50px">


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

Ptint
       
       </td>
       
</tr>







  
  
 <?php 
$id =1;
 foreach ($query as $row) :
  

  if($id%2== 0)
  {
?>
<tr  bgcolor="gray">
    <?php
  }
  else
  {
    ?>
    <tr>

    <?php
  }
  
  ?>
  
  


 


 
<div id="div_print<?php echo $row->id;  ?>">
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
         
         <?php 
          echo form_open('reception/appoinmentprint'); ?>
          <input type="hidden" name="id" value="<?php echo $row->id;  ?>" >
          <input type="submit" value ="Print IT" />
        
         </form>
        
       
       </td>
       
</tr>







<?php
$id++;
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