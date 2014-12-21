





<div class="container">
  
  
  
  
  
  
  
  
  

  
  
  <table border="1">

<tr border="1">
  

<td width="250px">

     My Name: 
		   
       </td>
    
<td width="200px">


     My Username
   

  </td>

<td width="100px">

     My Usertype
     
   
</td>


</tr>







  
  
 <?php 

 foreach ($query as $row) :
  
  
  ?>
  
  
 
 <script type="javascript" type="text/javascript">
 


 </script>

 

<tr border="1">
 

<td width="150px">

     <?php   echo $row->username;  ?>
       
       </td>
    
<td width="150px">

 <?php   echo $row->email;  ?>
      
   

  </td>

<td width="150px">

     <?php   echo $row->usertype;  ?>
       
     
   
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