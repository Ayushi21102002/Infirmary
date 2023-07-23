<?php
session_start();

include("include/connection.php");

if(isset($_POST['sign_in'])){

	$email=htmlentities(mysqli_real_escape_string($con,$_POST['email']));
	$pass=htmlentities(mysqli_real_escape_string($con,$_POST['pass']));

	$select_user="select * from users where user_email= '$email' AND user_pass='$pass'";
	$query=mysqli_query($con,$select_user);
	$check_user=mysqli_num_rows($query);
	if($check_user){
		header("location:home2.html");	
	}else{
		echo"
		<div class='alert alert-denger'>
		<strong> Check Your Email And Password </strong>
		</div>
		";
	}
}

?>