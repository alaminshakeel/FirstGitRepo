
<!DOCTYPE html>
<html lang="en"> 
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <link rel="stylesheet" href="<?php echo base_url();?>/css/style.css">
  
  
</head>
<body>
  <section class="container">
   <div class="dropdown">
	  <?php echo anchor('lab/welcomelab', 'Home'); ?>
	
 </div>
    <div class="dropdown">
   
       <?php echo anchor('lab/welcomelab', '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lab&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'); ?>
	  
	  <div>
        <ul>
          <li> <?php echo anchor('lab/invoice_entry', 'Lab Invoice Entry'); ?></li>
          <li> <?php echo anchor('lab/invoice_report', 'Lab Invoice Report'); ?></li>
          <li> <?php echo anchor('lab/test_entry', 'Lab Test Entry'); ?></li>
		  <li> <?php echo anchor('lab/test_report', 'Lab Test Report'); ?></li>
        </ul>
      </div>
    </div>
	
	 <div class="dropdown">
	  <?php echo anchor('lab/welcomelab', '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;My Profile&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'); ?>
	  <div>
	 <ul>
          <li> <?php echo anchor('lab/myaccount', 'Account Setting'); ?></li>
	   <li><?php echo anchor('lab/pass', 'Password Change'); ?></li>
	</ul></div>
 </div>
	
	
    <div class="dropdown">
	  <?php echo anchor('lab/logout', 'Logout'); ?>
	
 </div>
	
  </section>




