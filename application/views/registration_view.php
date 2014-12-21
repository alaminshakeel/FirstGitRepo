
<body>	
<div id="envelope">
<header>
    <h2>Login Form</h2>
   
</header>
<hr>
<?php echo form_open("user/login"); ?>
	<label> Select Account Type: </label>
	
	
	<select name="account" > <option value=""> Select Your Account Type</option>
	<option value="admin">Admin</option>
	<option value="pharmacy">Pharmacy</option>
	<option value="">Accounts</option>
	<option value="reception">Reception</option>
	<option value="lab">Lab</option>
	<option value="">Doctor</option>
	
	
	</select>
	<br>
	<br>
	<br>
	
	<label>Username </label>
	<input type="text" name="email" placeholder="username" width="100px;"> <br>
	<label>Passowrd </label>
	<input type="password" name="pass" placeholder="*******">		
	

	
	 <input type="submit" class="" value="Sign in" />
		
  <?php echo form_close(); ?>
</div>