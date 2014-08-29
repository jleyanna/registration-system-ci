<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Hello World - Registration Form</title>	
	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body{
		margin: 0 15px 0 15px;
	}
	
	p.footer{
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	
	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

	<script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body>

<div id="container" class="container-fluid">
	<div id="body" class="row">
		<h1>Registration Form</h1>
		<p>Welcome to the registration form.</p>	
		<?php echo validation_errors('<div class="bg-danger"><span class="glyphicon glyphicon-warning-sign"></span> ', '</div>'); ?>
		<form role="form" method="post" action="http://www.studioforty.com/helloworld/index.php?registration/reg/">
		  <div class="form-group">
			<label for="first_name">First Name</label>
			<input type="text" class="form-control" id="first_name" name="first_name" value="<?php echo set_value('first_name'); ?>" placeholder="Enter your first name.">
		  </div>
		  <div class="form-group">
			<label for="last_name">Last Name</label>
			<input type="text" class="form-control" id="last_name" name="last_name" value="<?php echo set_value('last_name'); ?>" placeholder="Enter your last name.">
		  </div>
		  <div class="form-group">
			<label for="address_1">Address</label>
			<input type="text" class="form-control" id="address_1" name="address_1" value="<?php echo set_value('address_1'); ?>" placeholder="Enter your address.">
		  </div>
		  <div class="form-group">
			<label for="address_2">Address 2</label>
			<input type="text" class="form-control" id="address_2" name="address_2" value="<?php echo set_value('address_2'); ?>" placeholder="Enter your address.">
		  </div>		  
		  <div class="form-group">
			<label for="city">City</label>
			<input type="text" class="form-control" id="city" name="city" value="<?php echo set_value('city'); ?>" placeholder="Enter your city.">
		  </div>
		  <div class="form-group">
			<label for="state">State</label>
			<input type="text" class="form-control" id="state" name="state" value="<?php echo set_value('state'); ?>" placeholder="Enter your state.">
		  </div>
		  <div class="form-group">
			<label for="zip">Zip Code</label>
			<input type="text" class="form-control" id="zip" name="zip" value="<?php echo set_value('zip'); ?>" placeholder="Enter your zip code.">
		  </div>
		  <div class="form-group">
			<label for="country">Country</label>
			<input type="text" class="form-control" id="country" name="country" value="<?php echo set_value('country'); ?>" placeholder="Enter your country.">
		  </div>
		  <button type="submit" class="btn btn-primary">Register Now</button>
		</form>

	</div>

	<p class="footer">Designed and Developed by <a href="http://www.jasonleyanna.com" target="_blank">Jason Leyanna</a>. Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

</body>
</html>