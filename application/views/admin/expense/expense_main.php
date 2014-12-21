







<div class="containerss">

  <table >
    <tr>
      <td>

<?php



echo validation_errors();

echo form_open('admin/expense_main_submit');
?>

  <table border="1">

<tr>

<td width="400px" align="center">

    	<label> Expense Main Name:*</label>
		   
      &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; <input type="text" name ="expensemain"  required>
	 
</td>

</tr>
 <tr><td colspan="2"><p> &nbsp; &nbsp; &nbsp;</p></td></tr>
   <tr rowspan="2"><td align="center" colspan="2" ><input type="submit" value="Save expensemain" ></td></tr>
</table>
<?php echo form_close();


?>

</td>
<td width="200px"></td>

<td>


<?php



echo validation_errors();

echo form_open('admin/expense_submain_submit');
?>

  <table border="1">

<tr>

<td width="400px">

      <label> Ward Name: *</label>
       
    &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; <select name="expensemain" required>
  <option value=""> Select Expense Main</option>

 <?php 

 foreach ($query as $row) :
  
  
  ?>
  
  <option value="<?php echo $row->expensecategory; ?>"> <?php echo $row->expensecategory; ?></option>

<?php 
 endforeach;
?>
     </select>
</td>


</tr>
 <tr><td colspan="2" >
  <label> Expense Sub Main</label>
       
      <input type="text" name ="expensesubcategory" required>
   

 </td></tr>
   <tr rowspan="2"><td align="center" colspan="2" ><input type="submit" value="Save SubCategory" ></td></tr>
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