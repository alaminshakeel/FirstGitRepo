

<div class="container">
  

  <?php



echo validation_errors();

echo form_open('pharmacy/pharmacy_madicine_submit');
?>
  <table align="center">

<tr>
<td width="400px">

    	<label>Madicine Name *</label>
		   
      &nbsp; &nbsp;  <input type="text" name ="madicinename" required >
	 
</td>

</tr>
 <tr><td colspan="2"><p> &nbsp; &nbsp; &nbsp;</p></td></tr>
   <tr rowspan="2"><td align="center" colspan="2" ><input type="submit" value="Save Madicine" ></td></tr>
</table>
<?php echo form_close();


?>

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

<table border="1" align="center">

 <tr bgcolor="green">
<td width="100px" align="center">

  No
    
</td>
<td width="215px" align="center">

   Madicine Name
     
    
</td>

</tr>



 <?php 

 foreach ($query as $row) :
  
  
  ?>
  



 <?php  $ps =$row->id;  
 if ($ps % 2 ==0) {
  ?>

  <tr  bgcolor="gray">
 <?php

 }  

else
{

  ?>
  <tr >

  <?php
}


 ?>



<td width="100px" align="center">

 <?php  echo $row->id; ?>
    
</td>
<td width="215px" align="center">

   <?php  echo $row->madicinename; ?>
     
    
</td>

</tr>
  <?php 
endforeach;


        ?>

</table>



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