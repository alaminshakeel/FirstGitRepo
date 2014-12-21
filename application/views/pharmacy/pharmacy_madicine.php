

<div class="container">
  

  <?php



echo validation_errors();

echo form_open('pharmacy/pharmacy_madicine_submit');
?>
  <table align="center">
    <tr>
<td width="400px">

      <label>Medicine Category*</label>
  <select name="pharmacycategory" required>
  <option value="">

Select Medicine Category
  </option>


 <?php 

 foreach ($query as $row) :
  
  
  ?>


    <option value="<?php echo $row->pharmacycategory;?>" >

<?php echo $row->pharmacycategory;?>
  </option>

<?php endforeach;  ?>


</select>

     
</td>

</tr>
<tr>
<td width="400px">

      <label>Medicine Generic*</label>
 &nbsp;&nbsp;&nbsp;<select name="madicingeneric" required>
  <option value="">

Select Pharmacy Category
  </option>


 <?php 

 foreach ($query as $row) :
  
  
  ?>


    <option value="<?php echo $row->madicingeneric;?>" >

<?php echo $row->madicingeneric;?>
  </option>

<?php endforeach;  ?>


</select>

     
</td>

</tr>

<tr>
<td width="400px">

    	<label>Manufacture Name *</label>
		   

<select name="madicinmanufacture" required>
  <option value="">

Select Pharmacy Category
  </option>


 <?php 

 foreach ($query as $row) :
  
  
  ?>


    <option value="<?php echo $row->madicinmanufacture;?>" >

<?php echo $row->madicinmanufacture;?>
  </option>

<?php endforeach;  ?>


</select>






</td>
</tr>
<tr>
<td width="400px">

      <label>Medicine Name *</label>
       
      &nbsp; &nbsp;  &nbsp; &nbsp; <input type="text" name ="madicinename" required >
   
</td>




</tr>
 <tr><td colspan="2"><p> &nbsp; &nbsp; &nbsp;</p></td></tr>
   <tr rowspan="2"><td align="center" colspan="2" ><input type="submit" value="Save Manufacture" ></td></tr>
</table>
<?php echo form_close();


?>

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>





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