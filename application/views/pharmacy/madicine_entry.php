

<div class="container">
  

  <?php



echo validation_errors();

echo form_open('pharmacy/madicine_entry_submit');
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
 $value = '';
 foreach ($query as $row) :
  
  if($value != $row->pharmacycategory)
  {
  
  ?>


    <option value="<?php echo $row->pharmacycategory;?>" >

<?php echo $row->pharmacycategory;?>
  </option>

<?php
}


$value=$row->pharmacycategory; endforeach;  ?>


</select>

     
</td>

</tr>
<tr><td colspan="2">&nbsp;</td></tr>
<tr>
<td width="400px">

      <label>Medicine Generic*</label>
 &nbsp;&nbsp;&nbsp;<select name="madicingeneric" required>
  <option value="">

Select Generic Category
  </option>


 <?php 

 $value = '';
 foreach ($query as $row) :
  $das= $row->pharmacycategory;
  if($value != $das)
  {
  ?>


    <option value="<?php echo $row->madicingeneric;?>" >

<?php echo $row->madicingeneric;?>
  </option>

<?php }


$value=$row->pharmacycategory;

endforeach;  ?>


</select>

     
</td>

</tr>
<tr><td colspan="2">&nbsp;</td></tr>
<tr>
<td width="400px">

    	<label>Manufacture Name *</label>
		   

<select name="madicinmanufacture" required>
  <option value="">

Select Manufacture Name
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
<tr><td colspan="2">&nbsp;</td></tr>
<tr>
<td width="400px">

      <label>Medicine Trade Name*</label>
       

&nbsp;&nbsp;<select name="madicinename" required>
  <option value="">

Select Medicine Name
  </option>


 <?php 

 foreach ($query as $row) :
  
  
  ?>


    <option value="<?php echo $row->madicinename;?>" >

<?php echo $row->madicinename;?>
  </option>

<?php endforeach;  ?>


</select>






</td>




</tr>
<tr><td colspan="2">&nbsp;</td></tr>
<tr>
<td width="400px">

      <label>Medicine Package *</label>
      

<select name="madicinepackage" required>
  <option value="">

Select Medicine Package
  </option>


 <?php 

 foreach ($query as $row) :
  
  
  ?>


    <option value="<?php echo $row->madicinepackage;?>" >

<?php echo $row->madicinepackage;?>
  </option>

<?php endforeach;  ?>


</select>



</td>




</tr>

<tr><td colspan="2">&nbsp;</td></tr>
<tr>
<td width="400px">
  <label>Total Quantity *</label>     
   &nbsp; &nbsp; &nbsp; <input type="text" name ="totalqty" required> 
</td>
</tr>
<tr><td colspan="2">&nbsp;</td></tr>
<tr>
<td width="400px">
     <label>Expire Date *</label>     
   &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;<input type="text" name ="expiredate" required> 
</td>
</tr>
<tr><td colspan="2">&nbsp;</td></tr>
<tr>
<td width="400px">
     <label>Store Box *</label>     
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name ="storebox" required> 
</td>
</tr>
<tr><td colspan="2">&nbsp;</td></tr>
<tr>
<td width="400px">
     <label>Purchase Price *</label>     
   &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name ="purchaseprice" required> 
</td>
</tr>
<tr><td colspan="2">&nbsp;</td></tr>
<tr>
<td width="400px">
    <label>Selling Price *</label>     
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name ="sellingprice" required> 
</td>
</tr>

 <tr><td colspan="2"><p> &nbsp; &nbsp; &nbsp;</p></td></tr>
   <tr rowspan="2"><td align="center" colspan="2" ><input type="submit" value="Save Medicine" ></td></tr>
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