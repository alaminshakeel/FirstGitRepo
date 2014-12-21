

<div class="container">
  
  

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

<table border="1" align="center">

 <tr bgcolor="green">
<td width="100px" align="center">

  No
    
</td>
<td width="215px" align="center">

   Pharmacy Category
     
    
</td>
<td width="215px" align="center">

   Madicine Generic
     
    
</td>
<td width="215px" align="center">

 Manufacuter Company
     
    
</td>
<td width="215px" align="center">

 Madicine Name
     
    
</td>
<td width="215px" align="center">

Package Name
     
    
</td>
<td width="215px" align="center">

Store Box
     
    
</td>
<td width="215px" align="center">

Total QTY

</td>
<td width="215px" align="center">

Expire Date
     
    
</td>
<td width="215px" align="center">

Purchase Price
     
    
</td>

<td width="215px" align="center">

Selling Price
     
    
</td>
<td width="215px" align="center">

Edit
     
    
</td>
<td width="215px" align="center">

Load
     
    
</td>



</tr>



 <?php 
 $id = 1;
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

 <?php



   echo $id; ?>
    
</td>
<td width="215px" align="center">

   <?php  echo $row->pharmacycategory; ?>
     
    
</td>
<td width="215px" align="center">

   <?php  echo $row->madicingeneric; ?>
     
    
</td>
<td width="215px" align="center">

   <?php  echo $row->madicinmanufacture; ?>
     
    
</td>
<td width="215px" align="center">

   <?php  echo $row->madicinename; ?>
     
    
</td>
<td width="215px" align="center">

   <?php  echo $row->madicinepackage; ?>
     
    
</td>
<td width="215px" align="center">

   <?php  echo $row->storebox; ?>
     
    
</td>
<td width="215px" align="center">

   <?php  echo $row->totalqty; ?>
     
    
</td>
<?php

$date1 = new DateTime($row->expiredate);
$date2 = new DateTime('2014-12-04');
//$now = time();


$diff = $date2->diff($date1)->format("%a");

?>

<td width="215px" align="center">

   <?php  echo $diff; ?>
     
    
</td>


<td width="215px" align="center">

   <?php  echo $row->purchaseprice; ?>
     
    
</td>
<td width="215px" align="center">

   <?php  echo $row->sellingprice; ?>
     
    
</td>
<td width="215px" align="center">

   <?php echo form_open('pharmacy/edit'); ?>
<input type="hidden" name="id" value="<?php echo $row->id; ?>">
<input type="submit"  value="Edit">
<? //echo form_close(); ?>
   </form>
    
</td>
<td width="215px" align="center">

    
 
  
  
  <?php echo form_open('pharmacy/load'); ?>
<input type="hidden" name="id" value="<?php echo $row->id; ?>">
<input type="submit"  value="Load">
<?// echo form_close(); ?>
  
  </form>
  
     
    
</td>
</tr>
  <?php 
  $id++;
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