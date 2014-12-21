







<div class="container">

  <table >
    <tr>
      <td>

<?php



echo validation_errors();

echo form_open('admin/ward_category_submit');
?>

  <table border="1">

<tr>

<td width="400px" align="center">

    	<label> ward Category Name:*</label>
		   
      &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; <input type="text" name ="wardname" required />
	 
</td>

</tr>
 <tr><td colspan="2"><p> &nbsp; &nbsp; &nbsp;</p></td></tr>
   <tr rowspan="2"><td align="center" colspan="2" ><input type="submit" value="Save Ward" ></td></tr>
</table>
<?php echo form_close();


?>

</td>
<td width="200px"></td>

<td>


<?php



echo validation_errors();

echo form_open('admin/bed_category_submit');
?>

  <table border="1">

<tr>

<td width="400px">

      <label> Ward Name: *</label>
       
     <select name="wardname">
  <option value=""> Select Ward name</option>

 <?php 

 foreach ($query as $row) :
  
  
  ?>
  
  <option value="<?php echo $row->wardcategory; ?>"> <?php echo $row->wardcategory; ?></option>

<?php 
 endforeach;
?>
     </select>
</td>
<td width="400px">

      <label> Bed  Name: *</label>
       
      &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; <input type="text" name ="bedname" required />
   
</td>

</tr>
 <tr><td colspan="2" >
  <label> Price Per Day *</label>
       
      &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; <input type="text" name ="bedprice" required />
   

 </td></tr>
   <tr rowspan="2"><td align="center" colspan="2" ><input type="submit" value="Save Bed" ></td></tr>
</table>
<?php echo form_close();


?>




</td>
</tr></table>


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