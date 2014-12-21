







<div class="container">




<table border="1" align="center">

 <tr bgcolor="green">
<td width="100px" align="center">

  No
    
</td>
<td width="215px" align="center">

    Expnse Main Category
     
    
</td>
<td width="215px" align="center">

    Expnse Sub Category
     
    
</td>
</tr>



 <?php 

 foreach ($queryb as $row) :
  
  
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

   <?php  echo $row->expensecategory; ?>
     
    
</td>
<td width="215px" align="center">

   <?php  echo $row->expensesubcategory; ?>
     
    
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