<?php



echo validation_errors();

echo form_open('admin/doctor_submit');
?>

<div class="container">
  
  
  
  
  
  
  
  
  
  
 
  
  
  
  
  
  <table>

<tr>

<td width="400px">

    	<label> Doctor Name: *</label>
		   
      &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; <input type="text" name ="doctorname" required />
	 
</td>
<td> &nbsp; &nbsp; &nbsp; &nbsp;</td>
<td width="400px">


      <label > Joining Date: </label>
     &nbsp;&nbsp;&nbsp;<input type="text" id="billdate"  name="doctordate" value=""  required>
  

  </td>
</tr>
 <tr><td colspan="2"><p> &nbsp; &nbsp; &nbsp;</p></td></tr>
<tr>

<td>

      <label> Speciality *</label>
       
     &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; <input type="text" name ="doctorspeciality" required/>
   
</td>
<td> &nbsp; &nbsp; &nbsp; &nbsp;</td>
<td>


      <label >Address </label>
   &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;<textarea id="billdate"  name="doctoraddress" value=""   required></textarea>
  

  </td>
</tr>
 <tr><td colspan="2"><p> &nbsp; &nbsp; &nbsp;</p></td></tr>
<tr>

<td>

      <label> Consultation Fee: *</label>
       
      &nbsp; <input type="text" name ="doctorfee" />
   
</td>
<td> &nbsp; &nbsp; &nbsp; &nbsp;</td>
<td>


      <label > Phone No: </label>
     &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;   <input type="text" id="billdate"  name="doctorphone" value=""  required>
  

  </td>
</tr>
 <tr><td colspan="2"><p> &nbsp; &nbsp; &nbsp;</p></td></tr>
   <tr rowspan="2"><td align="center" colspan="2" ><input type="submit" value="Save Doctor" ></td></tr>
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