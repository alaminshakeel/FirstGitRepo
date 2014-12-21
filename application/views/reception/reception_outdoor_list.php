
<div class="container">
  
  
  <table border="1">

<tr border="1">
  <td width="150px">

  No
       
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
  <td>

print

  </td>
</tr>







  
  
 <?php 

 foreach ($query as $row) :
  
  
  ?>
  
  
 
 <script type="javascript" type="text/javascript">
 


 </script>

 
<?php



echo validation_errors();

echo form_open('reception/reception_indoor_print');
?>


<tr border="1">
  <td width="150px">

  <input type="button" value="print" onclick="window.print()">
       
       </td>

<td width="150px">

     <?php   echo $row->outdoorpatientname;  ?>
       <input type="hidden" name ="inddorpatient" value=" <?php   echo $row->outdoorpatientname;  ?>" required />
       </td>
    
<td width="150px">

 <?php   echo $row->outdoordate;  ?>
       &nbsp;&nbsp;&nbsp;<input type="hidden" id="billdate"  name="indoordate" value="<?php   echo $row->outdoordate;  ?>"  required>
  
   

  </td>

<td width="150px">

     <?php   echo $row->outdoorage;  ?>
       
     &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; <input type="hidden" name ="indoorage" value="<?php   echo $row->outdoorage;  ?>" required/>
   
   
</td>

<td width="150px">


     <?php   echo $row->outdoorbirth;  ?>

     &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;  &nbsp;<input type="hidden" id="billdate"  name="indoorbirth" value="<?php   echo $row->outdoorbirth;  ?>"  required>
  
  </td>


<td width="150px">

    <?php   echo $row->outdoorgender;  ?>
       
   &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;  &nbsp;<input type="hidden" id="billdate"  name="indoorgender" value=" <?php   echo $row->outdoorgender;  ?>"  required>
  
   
</td>

<td width="150px">


     <?php   echo $row->outdoormerital;  ?>
     &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;  &nbsp;<input type="hidden" id="billdate"  name="indoormerital" value="  <?php   echo $row->outdoormerital;  ?>"  required>
  
 

  </td>
  <td width="150px">


     <?php   echo $row->outdoordoctor;  ?>
      &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;  &nbsp;<input type="hidden" id="billdate"  name="indoordoctor" value="  <?php   echo $row->outdoordoctor;  ?>"  required>
  
   

  </td><td width="150px">


     <?php   echo $row->outdoorblood;  ?>
     &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;  &nbsp;<input type="hidden" id="billdate"  name="indoorblood" value="  <?php   echo $row->outdoorblood;  ?>"  required>
  

  </td><td width="150px">


     <?php   echo $row->outdooraddress;  ?>
   
  &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;  &nbsp;<input type="hidden" id="billdate"  name="indooraddress" value="  <?php   echo $row->outdooraddress;  ?>"  required>
  

  </td><td width="150px">


     <?php   echo $row->outdoorphone;  ?>
   
 &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;  &nbsp;<input type="hidden" id="billdate"  name="indoorphone" value="  <?php   echo $row->outdoorphone;  ?>"  required>
  
  </td>

  </td><td width="150px">


     <?php   echo $row->outdoorconsultfee;  ?>
   
 &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;  &nbsp;<input type="hidden" id="billdate"  name="indoorconsultfee" value="  <?php   echo $row->outdoorconsultfee;  ?>"  required>
  
  </td>

  </td><td width="150px">


     <?php   echo $row->outdoorpatientcode;  ?>
    &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;  &nbsp;<input type="hidden" id="billdate"  name="indoorpatientcode" value="  <?php   echo $row->outdoorpatientcode;  ?>"  required>
 

  </td>

<td align="center" colspan="2" ><input type="submit" value="MIP" ></td>
<td>
 <?php 
          echo form_open('reception/editappoinment'); ?>
          <input type="hidden" name="id" value="<?php echo $row->id;  ?>" >
          <input type="submit" value ="Print IT" />
        
         </form>



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