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
	<!-- <form action="" method="post"> -->
		<form action="email-script.php" method="post" class="form-signin">
		<div class="form-header">
			<h2>Add Your Hospital</h2>
		</div>
		<div class="form-group">
			<label for="inputEmail">From <span style="color: #FF0000">*</span></label>
            <input type="text" name="fromEmail" id="fromEmail" class="form-control"  value="shahtanvi3108@gmail.com" readonly required autofocus>
		</div>
		<div class="form-group">
			<label for="inputEmail">To <span style="color: #FF0000">*</span></label>
            <input type="text" name="toEmail" id="toEmail" class="form-control" placeholder="Email address" required autofocus>
		</div>
		<div class="form-group">
			<label for="inputPassword">Subject <span style="color: #FF0000">*</span></label>
			<input type="text" id="subject" name="subject" class="form-control" placeholder="Subject" required>
		</div>
		<div class="form-group">
			<label for="inputPassword">Message <span style="color: #FF0000">*</span></label>
			<textarea  id="message" name="message" class="form-control" placeholder="Message" required ></textarea>
		</div>

		<div class="form-group">
			<button type="submit" class="btn btn-primary btn-block btn-lg" name="sendMailBtn">
				Send Email
			</button>
		</div>
	</form>
</div>
</body>
</html>