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
          <li class="active">  <?php echo anchor('lab/welcomelab', 'Home'); ?></li>

          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Invoice Entry<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
           
              <li class="divider"></li>
              <li><li>  <?php echo anchor('lab/invoice_entry', 'Invoice Entry'); ?></li></li>
            
              <li class="divider"></li>
              <li><li>  <?php echo anchor('lab/invoice_report', 'Invoice Report'); ?></li></li>
            
         </ul>
         </li>
   <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Test Category <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">

               <li class="divider"></li>
              <li><li>  <?php echo anchor('lab/test_category_entry', 'Test  Category Entry'); ?></li></li>
              <li class="divider"></li>
              <li><li>  <?php echo anchor('lab/test_entry', 'Test  Category'); ?></li></li>
            
              <li class="divider"></li>
              <li><li>  <?php echo anchor('lab/test_report', 'Test '); ?></li></li>
            
            </ul>
          </li>
           <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Test Report  <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">

              <li class="divider"></li>
              <li><li>  <?php echo anchor('lab/test_report', 'Test Reprot Entry'); ?></li></li>
            
              <li class="divider"></li>
              <li><li>  <?php echo anchor('lab/test_report', 'Test Report History '); ?></li></li>
            
            </ul>
          </li>






        </ul>
       <!--


	   <form class="navbar-form navbar-left" role="search">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
        </form>    --->
        <ul class="nav navbar-nav navbar-right">
         <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">My Account <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
             
              <li class="divider"></li>
              <li><li>  <?php echo anchor('lab/myaccount', 'My Account'); ?></li></li>
            <li class="divider"></li>
              <li><li>  <?php echo anchor('lab/pass', 'Password Changes'); ?></li></li>
            
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Logout <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
             
              <li class="divider"></li>
              <li><li>  <?php echo anchor('lab/logout', 'Logout'); ?></li></li>
            
            </ul>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>

 



