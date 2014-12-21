<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo $title; ?></title>
	

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/styles.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/datepicker.css" />



<script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap-datepicker.js"></script>


 
<script type="text/javascript">

$(function(){

});



</script>


<style type="text/css">

body { padding-top: 20px; }

</style>

</head>


<body>

<div class="container">
  <nav class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="active">  <?php echo anchor('pharmacy/welcomepharmacy', 'Home'); ?></li>


            <ul class="nav navbar-nav navbar">
         <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Pharmacy General<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
             
              <li class="divider"></li>
              <li><li>  <?php echo anchor('pharmacy/pharmacy_category', 'pharmacy Category Entry'); ?></li></li>
            
             <li class="divider"></li>
              <li><li>  <?php echo anchor('pharmacy/pharmacy_generic', 'pharmacy Generic Entry'); ?></li></li>
           <li class="divider"></li>
              <li><li>  <?php echo anchor('pharmacy/pharmacy_generic_list', 'pharmacy Generic List'); ?></li></li>

           <li class="divider"></li>
              <li><li>  <?php echo anchor('pharmacy/pharmacy_manufacture', 'pharmacy Manufacture Entry'); ?></li></li>
             <li class="divider"></li>
              <li><li>  <?php echo anchor('pharmacy/pharmacy_manufacture_list', 'pharmacy Manufacture List'); ?></li></li>
          
            <li class="divider"></li>
              <li><li>  <?php echo anchor('pharmacy/pharmacy_madicine', 'pharmacy Madicine Entry'); ?></li></li>
             <li class="divider"></li>
              <li><li>  <?php echo anchor('pharmacy/pharmacy_madicine_list', 'pharmacy Madicine List'); ?></li></li>
           <li class="divider"></li>
              <li><li>  <?php echo anchor('pharmacy/pharmacy_package', 'pharmacy Package Entry'); ?></li></li>
           
            <li class="divider"></li>
              <li><li>  <?php echo anchor('pharmacy/pharmacy_package_list', 'pharmacy Package List'); ?></li></li>
           
            </ul>
          </li>
          
        </ul>






          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Madicine Entry <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
           
              <li class="divider"></li>
              <li><li>  <?php echo anchor('pharmacy/madicine_entry', 'Madicine Entry'); ?></li></li>
             <li class="divider"></li>
              <li><li>  <?php echo anchor('pharmacy/madicine_entry_list', ' Madicine Entry List'); ?></li></li>
      
            
            </ul>
          </li>
        </ul>

   <ul class="nav navbar-nav navbar">
         <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Selling Medicine<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
             
              <li class="divider"></li>
              <li><li>  <?php echo anchor('pharmacy/medicine_sell', 'Medicine Selling'); ?></li></li>
            <li class="divider"></li>
              <li><li>  <?php echo anchor('pharmacy/medicine_sell_list', ' Medicine Selling List'); ?></li></li>
            
            </ul>
          </li>
          
        </ul>




        <ul class="nav navbar-nav navbar-right">
         <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">My Account <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
             
              <li class="divider"></li>
              <li><li>  <?php echo anchor('pharmacy/myaccount', 'My Account'); ?></li></li>
            <li class="divider"></li>
              <li><li>  <?php echo anchor('pharmacy/pass', 'Password Changes'); ?></li></li>
            
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Logout <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
             
              <li class="divider"></li>
              <li><li>  <?php echo anchor('pharmacy/logout', 'Logout'); ?></li></li>
            
            </ul>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>

 



