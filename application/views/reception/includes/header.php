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


 <Style type='text/css' media='print'>

#printSize {

margin-top: 300px;
  width : 470px;
background-color: gray;
height: 700px;
}

#printLink {display : none}

</Style>
 

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
          <li class="active">  <?php echo anchor('reception/welcomerec', 'Home'); ?></li>


            <ul class="nav navbar-nav navbar">
         <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Appointment<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
             
              <li class="divider"></li>
              <li><li>  <?php echo anchor('reception/reception_appointment', 'Patient Appointment Entry'); ?></li></li>
            <li class="divider"></li>
              <li><li>  <?php echo anchor('reception/reception_appointment_list', 'Patient Appointment List'); ?></li></li>
            
            </ul>
          </li>
          
        </ul>













          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Patient <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
           
              <li class="divider"></li>
              <li><li>  <?php echo anchor('reception/reception_indoor', 'Indoor Patient'); ?></li></li>
             <li class="divider"></li>
              <li><li>  <?php echo anchor('reception/reception_indoor_list', ' Indoor List'); ?></li></li>
            
              <li class="divider"></li>
              <li><li>  <?php echo anchor('reception/reception_outdoor', 'Outdoor Patient'); ?></li></li>
            <li class="divider"></li>
              <li><li>  <?php echo anchor('reception/reception_outdoor_list', 'Outdoor Patient List'); ?></li></li>
            
            
              
            
            </ul>
          </li>
        </ul>

   <ul class="nav navbar-nav navbar">
         <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Lab Test <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
             
              <li class="divider"></li>
              <li><li>  <?php echo anchor('reception/reception_labinvoiceentry', 'Lab Test Invoice Entry'); ?></li></li>
            <li class="divider"></li>
              <li><li>  <?php echo anchor('reception/reception_labinvoiceentry_list', ' Lab Test Invoice List'); ?></li></li>
            
            </ul>
          </li>
          
        </ul>


       <!--


	   <form class="navbar-form navbar-left" role="search">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
        </form>    -->


  <ul class="nav navbar-nav navbar">
         <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Patient Balance<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
             
              <li class="divider"></li>
              <li><li>  <?php echo anchor('reception/reception_duebalance', 'Patient Due Entry'); ?></li></li>
            <li class="divider"></li>
              <li><li>  <?php echo anchor('reception/reception_duebalance_list', 'Patient Due List'); ?></li></li>
            
            </ul>
          </li>
          
        </ul>
        <ul class="nav navbar-nav navbar-right">
         <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">My Account <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
             
              <li class="divider"></li>
              <li><li>  <?php echo anchor('reception/myaccount', 'My Account'); ?></li></li>
            <li class="divider"></li>
              <li><li>  <?php echo anchor('reception/pass', 'Password Changes'); ?></li></li>
            
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Logout <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
             
              <li class="divider"></li>
              <li><li>  <?php echo anchor('reception/logout', 'Logout'); ?></li></li>
            
            </ul>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>

 



