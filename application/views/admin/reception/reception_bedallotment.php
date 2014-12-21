





<div class="container">
  
  
  
  
  
  
  
  
  

  
  
  <table border="1">

<tr border="1">
  <td width="150px">

 
       
       </td>

<td width="250px">

     Patient Name: 
		   
       </td>
    
<td width="200px">


      Date
   

  </td>

<td width="100px">

     Age
       
     
   
</td>

<td width="350px">


     Date of Birth
 
  </td>


<td width="150px">

     Gender
       
   
   
</td>

<td width="250px">


      Marital Status
   

  </td>
  <td width="350px">


      Doctor Name
   

  </td><td width="150px">


     Blood 
   

  </td><td width="150px">


      Address
   

  </td><td width="150px">


      Phone No
   

  </td>
  <td width="150px">


     Consultation Fee
   

  </td><td width="150px">


      Patient Code
   

  </td>
</tr>







  
  
 <?php 

 foreach ($query as $row) :
  
  
  ?>
  
  
 
 <script type="javascript" type="text/javascript">
 


 </script>

 <?php



echo validation_errors();

echo form_open('admin/reception_indoorbed_submit');
?>

<tr border="1">
  <td width="150px">

  <input type="button" value="print" onclick="window.print()">
       
       </td>

<td width="150px">

     <?php   echo $row->inddorpatientname;  ?>
          <input type="hidden" name ="inddorpatient" value=" <?php   echo $row->inddorpatientname;  ?>" required />
      
       </td>
    
<td width="150px">

 <?php   echo $row->indoordate;  ?>
      
   

  </td>

<td width="150px">

     <?php   echo $row->indoorage;  ?>
       
     
   
</td>

<td width="150px">


     <?php   echo $row->indoorbirth;  ?>
  </td>


<td width="150px">

    <?php   echo $row->indoorgender;  ?>
       
   
   
</td>

<td width="150px">


     <?php   echo $row->indoormerital;  ?>
   

  </td>
  <td width="150px">


     <?php   echo $row->indoordoctor;  ?>
   

  </td><td width="150px">


     <?php   echo $row->indoorblood;  ?>
   

  </td><td width="150px">


     <?php   echo $row->indooraddress;  ?>
   

  </td><td width="150px">


     <?php   echo $row->indoorphone;  ?>
   

  </td>

  </td><td width="150px">


     <?php   echo $row->indoorconsultfee;  ?>
   

  </td>

  </td><td width="150px">


     <?php   echo $row->indoorpatientcode;  ?>
     &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;  &nbsp;<input type="hidden" id="billdate"  name="indoorpatientcode" value="  <?php   echo $row->indoorpatientcode;  ?>"  required>
 

  </td>

 <?php    
   if($row->bedstatus == '0')
   {

  ?>

<td align="center" colspan="2" ><input type="submit" value="BED" ></td>
 &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;  &nbsp;<input type="hidden" id="billdate"  name="bedstatus" value="  <?php   echo $row->bedstatus;  ?>"  required>
 


<?php  
   }  
   else
   {

  ?>
<td align="center" colspan="2" ><input type="button" value="OK" ></td>

<?php  
   }  
 

  ?>


</tr>

<?php echo form_close();


?>





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