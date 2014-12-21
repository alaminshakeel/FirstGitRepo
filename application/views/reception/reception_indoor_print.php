<?php



echo validation_errors();

echo form_open('reception/reception_indoor_list');
?>








<div class="container">
  

  <table>
  <?php  foreach ($query as $row) : ?>
    <div id="div1">
<tr>

<td width="400px">

    	<label> Patient Name: *</label>
		   
      &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; <input type="text" name ="apatient"  value = "<?php  echo $row->inddorpatientname;  ?> "required />

     
	 
</td>
<td> &nbsp; &nbsp; &nbsp; &nbsp;</td>
<td width="400px">


      <label > Registration Date: </label>
     &nbsp;&nbsp;&nbsp;<input type="text" id="billdate"  name="indoordate" value="<?php echo $row->indoordate; ?>"  required>
  

  </td>
</tr>
 <tr><td colspan="2"><p> &nbsp; &nbsp; &nbsp;</p></td></tr>
<tr>

<td>

      <label> Age: *</label>
       
     &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; <input type="text" name ="indoorage" value="<?php echo $row->indoorage; ?>"required/>
   
</td>
<td> &nbsp; &nbsp; &nbsp; &nbsp;</td>
<td>


      <label >Date of Birth </label>
 &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;  &nbsp;<input type="text" id="billdate"  name="indoorbirth" value="<?php echo $row->indoorbirth; ?>"  required>
  

  </td>
</tr>
 <tr><td colspan="2"><p> &nbsp; &nbsp; &nbsp;</p></td></tr>
<tr>

<td>

      <label> Gender</label>
       
     &nbsp; &nbsp;      &nbsp; &nbsp;       &nbsp; &nbsp;         &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; <input type="text" id="billdate"  name="indoorbirth" value="<?php echo $row->indoorgender; ?>"  required>
          

       
    </select>
   
</td>
<td> &nbsp; &nbsp; &nbsp; &nbsp;</td>
<td>

      <label> Marital Status</label>
       
     &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;<input type="text" id="billdate"  name="indoorbirth" value="<?php  echo $row->indoormerital; ?>"  required>
         
   
</td>
</tr>
<tr><td colspan="2"><p> &nbsp; &nbsp; &nbsp;</p></td></tr>
<tr>

<td>

      <label> Consulting Doctor</label>
       
      &nbsp; 
          <input type="text" id="billdate"  name="indoorbirth" value="<?php  echo $row->indoordoctor; ?>"  required>
   
</td>
<td> &nbsp; &nbsp; &nbsp; &nbsp;</td>
<td>

      <label> Blood Group</label>
       
      &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; 
            <input type="text" id="billdate"  name="indoorbirth" value="<?php  echo $row->indoorblood; ?>"  required>
   
</td>
</tr>
 <tr><td colspan="2"><p> &nbsp; &nbsp; &nbsp;</p></td></tr>
<tr>

<td>

      <label> Address: *</label>
       
      &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<input type="text" name ="indooraddress"  value="<?php  echo $row->indooraddress; ?>" required/>
   
</td>
<td> &nbsp; &nbsp; &nbsp; &nbsp;</td>
<td>


      <label >Phone No </label>
   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<input type="text" id="billdate"  name="indoorphone"  value="<?php  echo $row->indoorphone; ?>"  required>
  

  </td>
</tr>

 <tr><td colspan="2"><p> &nbsp; &nbsp; &nbsp;</p></td></tr>
<tr>

<td>

      <label>Consulting Fee *</label>
       
      &nbsp; &nbsp; &nbsp;<input type="text" name ="indoorconsultfee"  value="<?php  echo $row->indoorconsultfee; ?>"  required/>
   
</td>
<td> &nbsp; &nbsp; &nbsp; &nbsp;</td>
<td>


      <label >Patient Code</label>
   &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;<input type="text" id="billdate"  name="indoorpatientcode" value="<?php  echo $row->indoorpatientcode; ?>" required>
  

  </td>
</tr>
 <tr><td colspan="2"><p> &nbsp; &nbsp; &nbsp;</p></td></tr>
<tr>

<td>

      <label>Ward Category *</label>
       
      &nbsp; &nbsp; &nbsp;<input type="text" id="billdate"  name="indoorpatientcode" value="<?php  echo $row->indoorward; ?>" required>
  

   
   
</td>
<td> &nbsp; &nbsp; &nbsp; &nbsp;</td>
<td>


      <label >Bed No</label>
    &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;<input type="text" id="billdate"  name="" value="<?php echo $row->indoorbed; ?>" required>
  

   
  </td>
</tr>



 <tr><td colspan="2"><p> &nbsp; &nbsp; &nbsp;</p></td></tr>
  
   <tr >

   <td>


      <label >Date for Bed</label>
   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input type="text" name="indoorbeddate" value="<?php echo $row->indoorbeddate; ?>" required> 


  </td>
<td></td>
    <td>


      <label >Bed Charge</label>
    &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;<input type="text" name="ondoorbedcharge" value="<?php echo $row->ondoorbedcharge; ?>" required /> 


  </td>
  </tr> </div>
  <tr><td colspan="2"><p> &nbsp; &nbsp; &nbsp;</p></td></tr>
   <tr colspan="2">
    <td align="center"  >
     
    &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;  <a href=# onclick="window.print()" id='printLink'> Print this page</a>
   
</td></tr>
  <?php endforeach; ?>
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