



<?php

echo validation_errors();

echo form_open('reception/reception_appointment_list');

$name ='';
?>

<div class="container">

  <table>
  <?php  foreach ($base as $row) : ?>

<tr>




<td width="400px">

    	<label> Patient Name: *</label>
		   
      &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; <input type="text" name ="apatient"  value = "<?php  echo $row->apatient;  ?> "required />

</td>
<td> &nbsp; &nbsp; &nbsp; &nbsp;</td>
<td width="400px">


      <label > Appintment Date: </label>
     &nbsp;&nbsp;&nbsp;<input type="text" id="billdate"  name="appintmentdate"  value = "<?php  echo $row->appintmentdate;  ?> "  required>
  

  </td>
</tr>
 <tr><td colspan="2"><p> &nbsp; &nbsp; &nbsp;</p></td></tr>
<tr>

<td>

      <label> Appointment Time: *</label>
       
      <input type="text" name ="atime" value = "<?php  echo $row->atime;  ?> " required/>
   
</td>
<td> &nbsp; &nbsp; &nbsp; &nbsp;</td>
<td>


      <label >Consulting Doctor: </label>
  
 <input type="text" name ="adoctor" value = "<?php  echo $row->adoctor;  ?> " required/>

  

  </td>
</tr>






 <tr><td colspan="2"><p> &nbsp; &nbsp; &nbsp;</p></td></tr>
<tr>

<td>

      <label> Consultation Fee: *</label>
     
       
      &nbsp; <input type="text" name ="afee" value = "<?php  echo $row->afee.' taka';  ?> " />
     
   
</td>
<td> &nbsp; &nbsp; &nbsp; &nbsp;</td>
<td>


      <label > Phone No: </label>
    &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;   <input type="text" id="billdate"  name="aphone"  value = "<?php  echo $row->aphone;  ?> "   required>
  

  </td>
</tr>
<?php  endforeach;  ?>
 <tr><td colspan="2"><p> &nbsp; &nbsp; &nbsp;</p></td></tr>
  <tr><td></td><td></td><td><p>------------------- <br> Sign & Date</p></td><td> </td></tr>
   <tr rowspan="2"><td align="center" colspan="2" ><input type="submit" value="Print" onclick="window.print()" ></td></tr>
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