<?php
include("include/connection.php");
if(isset($_POST['sign_up'])){
	$name=htmlentities(mysqli_real_escape_string($con,$_POST['user_name']));
	$pass=htmlentities(mysqli_real_escape_string($con,$_POST['user_pass']));
	$email=htmlentities(mysqli_real_escape_string($con,$_POST['user_email']));
	$country=htmlentities(mysqli_real_escape_string($con,$_POST['user_country']));
	$gender=htmlentities(mysqli_real_escape_string($con,$_POST['user_gender']));

	if($name==''){
		echo"<script> alert('We can't verify your name') </script>";
	}

	if(strlen($pass)<8){
		echo"<script> alert('Password Should be minimum 8 characters!!') </script>";
		exit();
	}
	$check_email="select * from users where user_email='$email'";
	$run_email=mysqli_query($con,$check_email);

	$check=mysqli_num_rows($run_email);
	//if email already exist
	if($check==1){
		echo"<script> alert('Email Alredy Exist Please Try Again') </script>";		
		echo"<script> window.open('signup.php','_self') </script>";
		exit();
	}
	

	$insert="insert into users(user_name,user_pass,user_email,user_country,user_gender) 
	values('$name','$pass','$email','$country','$gender')";

	$query=mysqli_query($con,$insert);
	if($query){
		echo"<script> alert('Congratulations,Your account has been created succesfully') </script>";
		echo"<script> window.open('signin.php','_self') </script>";	
	}else{
		echo"<script> alert('Registration failed,Please try again') </script>";
		echo"<script> window.open('signup.php','_self') </script>";	
	}
}
?>