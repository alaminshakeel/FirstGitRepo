

<div class="container">
  

  <?php



echo validation_errors();

echo form_open('pharmacy/madicine_entry_submit');
?>
  <table align="center">
  <?php 

 foreach ($query as $row) :
  
  
  ?>
    <tr>
<td width="400px">

      <label>Medicine Category*</label>
	  <input type="text" name="pharmacycategory" value= "<?php echo $row->pharmacycategory;?>" required>



 



     
</td>

</tr>
<?php  endforeach; ?>
<tr><td colspan="2">&nbsp;</td></tr>
<tr>
<td width="400px">

      <label>Medicine Generic*</label>
 <?php 

 foreach ($query as $row) : ?>
  <input type="text" name="madicingeneric" value= "<?php echo $row->madicingeneric;?>" required>
<?php endforeach;  ?>

</td>

</tr>
<tr><td colspan="2">&nbsp;</td></tr>
<tr>
<td width="400px">

    	<label>Manufacture Name *</label>
		    <?php 

 foreach ($query as $row) : ?>
  <input type="text" name="madicinmanufacture" value= "<?php echo $row->madicinmanufacture;?>" required>
<?php endforeach;  ?>




</td>
</tr>
<tr><td colspan="2">&nbsp;</td></tr>
<tr>
<td width="400px">

      <label>Medicine Trade Name*</label>
       	    <?php 

 foreach ($query as $row) : ?>
  <input type="text" name="madicinename" value= "<?php echo $row->madicinename;?>" required>
<?php endforeach;  ?>


</td>




</tr>
<tr><td colspan="2">&nbsp;</td></tr>
<tr>
<td width="400px">

      <label>Medicine Package *</label>
         	    <?php 

 foreach ($query as $row) : ?>
  <input type="text" name="madicinepackage" value= "<?php echo $row->madicinepackage;?>" required>
<?php endforeach;  ?>



</td>




</tr>

<tr><td colspan="2">&nbsp;</td></tr>
<tr>
<td width="400px">
  <label>Total Quantity *</label>     
   &nbsp; &nbsp; &nbsp;  
    <?php 

 foreach ($query as $row) : ?>
  <input type="text" name="totalqty" value= "<?php echo $row->expiredate;?>" required>
<?php endforeach;  ?>
</td>
</tr>
<tr><td colspan="2">&nbsp;</td></tr>
<tr>
<td width="400px">
     <label>Expire Date *</label>     
	        	    <?php 

 foreach ($query as $row) : ?>
  <input type="text" name="expiredate" value= "<?php echo $row->expiredate;?>" required>
<?php endforeach;  ?>


</td>
</tr>
<tr><td colspan="2">&nbsp;</td></tr>
<tr>
<td width="400px">
     <label>Store Box *</label>  
	    <?php 

 foreach ($query as $row) : ?>
  <input type="text" name="storebox" value= "<?php echo $row->storebox;?>" required>
<?php endforeach;  ?>



</td>
</tr>
<tr><td colspan="2">&nbsp;</td></tr>
<tr>
<td width="400px">
     <label>Purchase Price *</label>  
	 
	 <?php
foreach ($query as $row) : ?>
  <input type="text" name="purchaseprice" value= "<?php echo $row->purchaseprice;?>" required>
<?php endforeach;  ?>

	 
</td>
</tr>
<tr><td colspan="2">&nbsp;</td></tr>
<tr>
<td width="400px">
    <label>Selling Price *</label>
 <?php
foreach ($query as $row) : ?>
  <input type="text" name="sellingprice" value= "<?php echo $row->sellingprice;?>" required>
<?php endforeach;  ?>	
  
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