<!DOCTYPE html>
<html>
<head>
	<title>Login to your Account</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Roboto|Courgette|Pacificio:400,700"rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/JQuery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.css"></script>
	<link rel="stylesheet" type="text/css" href="css/signin.css">
</head>
<body>
<div class="signin-form">
	<form action="" method="post">
		<div class="form-header">
			<h2>Sign In</h2>
			<p>Login to Infirmary</p>
		</div>
		<div class="form-group">
			<label>Email</label>
			<input type="email" name="email" class="form-control" placeholder="someone@site.com" autocomplete="off" required>
		</div>
		<div class="form-group">
			<label>Password</label>
			<input type="Password" name="pass" class="form-control" placeholder="password" autocomplete="off" required>
		</div>

		<div class="form-group">
			<button type="submit" class="btn btn-primary btn-block btn-lg" name="sign_in">Sign in</button>
		</div>
		<?php 
		include("signin_user.php");
		 ?>
	</form>
	<div class="text-center small" style="color: #00cb82;"> Don't have account? <a href="signup.php">Create One</a></div>
</div>
</body>
</html>