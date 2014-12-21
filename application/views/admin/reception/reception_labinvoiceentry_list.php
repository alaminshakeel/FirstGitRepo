
<script>
 function printContent(el)
 { var restorepage = document.body.innerHTML; 
 var printcontent = document.getElementById(el).innerHTML;
 document.body.innerHTML = printcontent;
 window.print(); document.body.innerHTML = restorepage;
 } 



 </script> 
















<div class="container">
  
  
  
  
  
  
  
  
  

  
  
  <table border="1">

<tr border="1">
 <td width="15px">

     No: 
       
       </td>


 

<td width="150px">

     Patient Name: 
		   
       </td>
    
<td width="150px">


       Date
   

  </td>

<td width="150px">

     Age  
     
   
</td>

<td width="150px">


    Sex
 
  </td>


<td width="150px">

     PatientCode
       
   
   
</td>
 <td width="150px">

  Print Invoice
       
       </td>


<td width="150px">


      Entry Person
   

  </td>

</tr>







  
  
 <?php 

 foreach ($query as $row) :
  
  
  ?>
  


 
<tr border="1" id="div<?php  echo $row->id;  ?>">


<td >

     <?php   echo $row->id;  ?>
       
       </td>


<td width="150px">

     <?php   echo $row->patientname;  ?>
       
       </td>
    
<td width="150px">

 <?php   echo $row->billdate;  ?>
      
   

  </td>

<td width="150px">

     <?php   echo $row->patientage;  ?>
       
     
   
</td>

<td width="150px">


     <?php   echo $row->patientsex;  ?>
  </td>


<td width="150px">

    <?php   echo $row->patientcode;  ?>
       
   
   
</td>


  <td width="50px" align="center">

 
       
<button onclick="printContent('div<?php echo $row->id;   ?>')">Print</button>


       </td>
        <td width="150px">


     <?php   echo $row->entryperson;  ?>
   

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