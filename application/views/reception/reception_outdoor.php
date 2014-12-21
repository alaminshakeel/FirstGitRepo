<?php



echo validation_errors();

echo form_open('reception/reception_outdoor_submit');
?>

<div class="container">
  
  
  
  
  
  
  
  
  
  
 
  
  
  
  
  
  <table>

<tr>

<td width="400px">

    	<label> Patient Name: *</label>
		   
      &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; <input type="text" name ="outdoorpatient" required />
	 
</td>
<td> &nbsp; &nbsp; &nbsp; &nbsp;</td>
<td width="400px">


      <label > Registration Date: </label>
     &nbsp;&nbsp;&nbsp;<input type="text" id="billdate"  name="outdoordate" value=""  required>
  

  </td>
</tr>
 <tr><td colspan="2"><p> &nbsp; &nbsp; &nbsp;</p></td></tr>
<tr>

<td>

      <label> Age: *</label>
       
     &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; <input type="text" name ="outdoorage" required/>
   
</td>
<td> &nbsp; &nbsp; &nbsp; &nbsp;</td>
<td>


      <label >Date of Birth </label>
 &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;  &nbsp;<input type="text" id="billdate"  name="outdoorbirth" value=""  required>
  

  </td>
</tr>
 <tr><td colspan="2"><p> &nbsp; &nbsp; &nbsp;</p></td></tr>
<tr>

<td>

      <label> Gender</label>
       
     &nbsp; &nbsp;      &nbsp; &nbsp;       &nbsp; &nbsp;         &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; <select name="outdoorgender" required>
           <option value="" >
           Select Gender

           </option>
           <option value="male">Male</option>
           <option value="famale">Famale</option>

       
    </select>
   
</td>
<td> &nbsp; &nbsp; &nbsp; &nbsp;</td>
<td>

      <label> Marital Status</label>
       
     &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;<select name="outdoormerital" required>
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
       
      &nbsp; <select name="outdoordoctor" required>
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
       
      &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; <select name="outdoorblood" required>
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
       
      &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<input type="text" name ="outdooraddress" required/>
   
</td>
<td> &nbsp; &nbsp; &nbsp; &nbsp;</td>
<td>


      <label >Phone No </label>
   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<input type="text" id="billdate"  name="outdoorphone" value=""  required>
  

  </td>
</tr>

 <tr><td colspan="2"><p> &nbsp; &nbsp; &nbsp;</p></td></tr>
<tr>

<td>

      <label>Consulting Fee *</label>
       
      &nbsp; &nbsp; &nbsp;<input type="text" name ="outdoorconsultfee" required/>
   
</td>
<td> &nbsp; &nbsp; &nbsp; &nbsp;</td>
<td>


      <label >Patient Code</label>
   &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;<input type="text" id="billdate"  name="outdoorpatientcode" value=""  required>
  

  </td>
</tr>




 <tr><td colspan="2"><p> &nbsp; &nbsp; &nbsp;</p></td></tr>
   <tr rowspan="2"><td align="center" colspan="2" ><input type="submit" value="Save Outdoor Patient" ></td></tr>
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