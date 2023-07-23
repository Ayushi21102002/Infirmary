<!DOCTYPE html>
<html>
<head>
	<title>Create New Account</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Roboto|Courgette|Pacificio:400,700"rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/JQuery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.css"></script>
	<link rel="stylesheet" type="text/css" href="css/signup.css">
</head>
<body>
<div class="signup-form">
	<form action="" method="post">
		<div class="form-header">
			<h2>Sign Up</h2>
			<p>Fill out this form and start Finding Your Comfortable Hospital.</p>
		</div>
		<div class="form-group">
			<label>Username</label>
			<input type="text" name="user_name" class="form-control" placeholder="Enter Username" autocomplete="off" required>
		</div>
		<div class="form-group">
			<label>Password</label>
			<input type="Password" name="user_pass" class="form-control" placeholder="password" autocomplete="off" required>
		</div>
		<div class="form-group">
			<label>Email Address</label>
			<input type="email" name="user_email" class="form-control" placeholder="someone@site.com" autocomplete="off" required>
		</div>
		<div class="form-group">
			<label>Country</label>
			<select class="form-control" name="user_country">
				<option disabled="">Select a Country</option>
				<option>Pakistan</option>
				<option>United States of America</option>
				<option>India</option>
				<option>UK</option>
				<option>Bangladesh</option>
				<option>France</option>
			</select>
		</div>
		<div class="form-group">
			<label>Gender</label>
			<br>
				<input type="radio" name="user_gender" value="male"> Male<br>
				<input type="radio" name="user_gender" value="female"> Female<br>
				<input type="radio" name="user_gender" value="others"> Others<br>
		</div>

		<div class="form-group">
			<label class="checkbox-inline"><input type="checkbox" required> I accept the <a href="#">Terms of use </a> &amp; <a href="#">Privacy Policy</a>
			</label>
		</div>
		
		<div class="form-group">
			<button type="submit" class="btn btn-primary btn-block btn-lg" name="sign_up">Sign Up</button>
		</div>
		<?php 
		include("signup_user.php");
		 ?>
	</form>
	<div class="text-center small" style="color: #00cb82;"> Already have an account? <a href="signin.php">Signin here</a></div>
</div>
</body>
</html>