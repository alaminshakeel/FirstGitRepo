<?php



echo validation_errors();

echo form_open('reception/reception_indoor_submit');
?>

<div class="container">
  
  
  
  
  
  
  
  
  
  
 
  
  
  
  
  
  <table>

<tr>

<td width="400px">

    	<label> Patient Name: *</label>
		   
      &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; <input type="text" name ="inddorpatient" required />
	 
</td>
<td> &nbsp; &nbsp; &nbsp; &nbsp;</td>
<td width="400px">


      <label > Registration Date: </label>
     &nbsp;&nbsp;&nbsp;<input type="text" id="billdate"  name="indoordate" value=""  required>
  

  </td>
</tr>
 <tr><td colspan="2"><p> &nbsp; &nbsp; &nbsp;</p></td></tr>
<tr>

<td>

      <label> Age: *</label>
       
     &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; <input type="text" name ="indoorage" required/>
   
</td>
<td> &nbsp; &nbsp; &nbsp; &nbsp;</td>
<td>


      <label >Date of Birth </label>
 &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;  &nbsp;<input type="text" id="billdate"  name="indoorbirth" value=""  required>
  

  </td>
</tr>
 <tr><td colspan="2"><p> &nbsp; &nbsp; &nbsp;</p></td></tr>
<tr>

<td>

      <label> Gender</label>
       
     &nbsp; &nbsp;      &nbsp; &nbsp;       &nbsp; &nbsp;         &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; <select name="indoorgender" required>
           <option value="" >
           Select Gender

           </option>
           <option value="male">Male</option>
           <option value="female">Female</option>

       
    </select>
   
</td>
<td> &nbsp; &nbsp; &nbsp; &nbsp;</td>
<td>

      <label> Marital Status</label>
       
     &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;<select name="indoormerital" required>
           <option value="" >
           Select Merital Status

           </option>
           <option value="married">Married</option>
           <option value="single">Single</option>

       
    </select>
   
</td>
</tr>
<tr><td colspan="2"><p> &nbsp; &nbsp; &nbsp;</p></td></tr>
<tr>

<td>

      <label> Consulting Doctor</label>
       
      &nbsp; <select name="indoordoctor" required>
           <option value="" >
           Select Doctor

           </option>
           <?php 

 foreach ($base as $row) :
  
  
  ?>
 <option value=" <?php echo $row->doctorname;?>"> <?php echo $row->doctorname;?></option>

<?php

 endforeach;
?>
       
    </select>
   
</td>
<td> &nbsp; &nbsp; &nbsp; &nbsp;</td>
<td>

      <label> Blood Group</label>
       
      &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; <select name="indoorblood" required>
           <option value="" >
           Select Blood Group

           </option>
           <option value="A+">A+</option>
           <option value="A-">A-</option>
             <option value="B+">B+</option>
           <option value="B-">B-</option>
            <option value="O+">O+</option>
           <option value="O-">O-</option> 
           <option value="AB+">AB+</option>
           <option value="AB-">AB-</option>

       
    </select>
   
</td>
</tr>
 <tr><td colspan="2"><p> &nbsp; &nbsp; &nbsp;</p></td></tr>
<tr>

<td>

      <label> Address: *</label>
       
      &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<input type="text" name ="indooraddress" required/>
   
</td>
<td> &nbsp; &nbsp; &nbsp; &nbsp;</td>
<td>


      <label >Phone No </label>
   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<input type="text" id="billdate"  name="indoorphone" value=""  required>
  

  </td>
</tr>

 <tr><td colspan="2"><p> &nbsp; &nbsp; &nbsp;</p></td></tr>
<tr>

<td>

      <label>Consulting Fee *</label>
       
      &nbsp; &nbsp; &nbsp;<input type="text" name ="indoorconsultfee" required/>
   
</td>
<td> &nbsp; &nbsp; &nbsp; &nbsp;</td>
<td>


      <label >Patient Code</label>
     
    <?php  $i = 1; 
    foreach ($querys as $key ) :
    if ($i == 1) {
      # code...
    
      $value = $key->patientcode+1;
     ?>
   &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;<input type="text" id="billdate"  name="indoorpatientcode" value="<?php echo $value; ?>"  required>
  
<?php } $i++;
 endforeach;?>
  </td>
</tr>
 <tr><td colspan="2"><p> &nbsp; &nbsp; &nbsp;</p></td></tr>
<tr>

<td>

      <label>Ward Category *</label>
       
      &nbsp; &nbsp; &nbsp;<select name="indoorward" required>
    <option value="">Select Ward</option>
   <option value="ward1">ward1</option>

      <?php 

 foreach ($query as $row) :
  
  
  ?>
 <option value=" <?php echo $row->wardcategory;?>"> <?php echo $row->wardcategory;?></option>

<?php

 endforeach;
?>
    </select>
   
</td>
<td> &nbsp; &nbsp; &nbsp; &nbsp;</td>
<td>


      <label >Bed No</label>
    &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;<select name="indoorbed" required>
    <option value="">Select Bed</option>
   <option value="bed">Bed1 </option>
   

  </td>
</tr>



 <tr><td colspan="2"><p> &nbsp; &nbsp; &nbsp;</p></td></tr>
  
   <tr >

   <td>


      <label >Date for Bed</label>
   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input type="text" name="indoorbeddate" required> 


  </td>
<td></td>
    <td>


      <label >Bed Charge</label>
    &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;<input type="text" name="ondoorbedcharge" required /> 


  </td>
  </tr>
  <tr><td colspan="2"><p> &nbsp; &nbsp; &nbsp;</p></td></tr>
   <tr colspan="2">
    <td align="center"  >

    &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;  <input type="submit" value="Save Indoor Patient" ></td></tr>
</table>

</div>
<script type="text/javascript" src="<?php echo base_url(); ?>js/lab/ajax-fetch-lists.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/lab/lab-invoice-validation.js"></script>
<script type="text/javascript">
$('#billdate').datepicker({format:'yyyy-mm-dd'});
</script>
<?php echo form_close();


?>
<p>

  &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;
    &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<br>
      &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<br>
        &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;
          &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;







</p>