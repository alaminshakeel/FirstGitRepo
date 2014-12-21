<?php



echo validation_errors();

echo form_open('reception/');
?>

<div class="container">
  

  <table>
<?php  foreach ($base as $key ) :
 ?>
<tr>

<td width="150px">

    	<label> Patient Name: *</label></td>
		   
    <td> <input type="text" name ="outdoorpatient" value= "<?php echo $key->outdoorpatientname; ?>" required />
	 
</td>

<td width="150px">


    &nbsp;  <label > Registration Date: </label>
  </td>

 <td><input type="text" id="billdate"  name="outdoordate" value= "<?php echo $key->outdoordate; ?>"  required> </td>
  

</tr>
 <tr><td colspan="2"><p> &nbsp; &nbsp; &nbsp;</p></td></tr>
<tr>

<td>

      <label> Age: *</label>
       </td><td> 
    <input type="text" name ="outdoorage"  value= "<?php echo $key->outdoorage; ?>"  required/>
   
</td>

<td>


      <label >Date of Birth </label></td><td>
<input type="text" id="billdate"  name="outdoorbirth" value= "<?php echo $key->outdoorbirth; ?>"   required>
  

  </td>
</tr>
 <tr><td colspan="2"><p> &nbsp; &nbsp; &nbsp;</p></td></tr>
<tr>

<td>

      <label> Gender</label>
       </td> <td>
<input type="text" id="billdate"   value= "<?php echo $key->outdoorgender; ?>"  required>
           
   
</td>

<td>

      <label> Marital Status</label>
       
    </td>
    <td>
        <input type="text" id="billdate"  name="outdoorbirth"  value= "<?php echo $key->outdoormerital; ?>"  required>  
</td>
</tr>
<tr><td colspan="2"><p> &nbsp; &nbsp; &nbsp;</p></td></tr>
<tr>

<td>

      <label> Consulting Doctor</label></td>
       
    <td>
<input type="text" id="billdate"  name="outdoorbirth"  value= "<?php echo $key->outdoordoctor; ?>"   required>  
    </td>  
          
 
 
<td>

      <label> Blood Group</label></td> <td>
       
     
   <input type="text" id="billdate"  name="outdoorbirth" value= "<?php echo $key->outdoorblood; ?>"   required>  
</td>
</tr>
 <tr><td colspan="2"><p> &nbsp; &nbsp; &nbsp;</p></td></tr>
<tr>

<td>

      <label> Address: *</label> </td><td>
       
     <input type="text" name ="outdooraddress"  value= "<?php echo $key->outdooraddress; ?>"  required/>
   
</td>

<td>


      <label >Phone No </label> </td><td>
  <input type="text" id="billdate"  name="outdoorphone" value= "<?php echo $key->outdoorphone; ?>"    required>
  

  </td>
</tr>

 <tr><td colspan="2"><p> &nbsp; &nbsp; &nbsp;</p></td></tr>
<tr>

<td>

      <label>Consulting Fee *</label></td>
       
     <td><input type="text" name ="outdoorconsultfee"  value= "<?php echo $key->outdoorconsultfee; ?>"  required/>
   
</td>

<td>


      <label >Patient Code</label></td><td>
  <input type="text" id="billdate"  name="outdoorpatientcode"  value= "<?php echo $key->outdoorpatientcode; ?>"   required>
  

  </td>
</tr>

<?php endforeach;?>


 <tr><td colspan="2"><p> &nbsp; &nbsp; &nbsp;</p></td></tr>
   <tr rowspan="2"><td align="center" colspan="2" > 

<a href=# onclick="window.print()" id='printLink'> Print this page</a>

   </td></tr>
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