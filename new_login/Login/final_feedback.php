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
	<button class="open-button" onclick="openForm()" required>Feedback</button>
<div class="signin-form">
	<form action="" class="form-container" method="post">
		<div class="form-header">
			<h2>fEEDBACK</h2>
			<p>Send Your Review</p>
		</div>
<div class="form-group">
	<input type="text" placeholder="First Name" name="fname" required autofocus="true">		
		</div>
    <div class="form-group">
    <input type="text" placeholder="Last Name" name="lname" required>	
    </div>
    <div class="form-group">
    <input type="text" placeholder="Phone Number" name="mob_no" required>	
    </div>
    <div class="form-group">
    <input type="text" placeholder="Email" name="email" required>	
    </div>
    <div class="form-group">
    	<input type="text" placeholder="Your Feedback" name="feedback" required>

    </div>
    <div class="form-group">
    	<input type="submit" class="btn" name="submit" value="Send Feedback">
    </div>
    
    
    
    
    
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
  <script>

function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

<?php
  
  $username="root";
  $password="";
  $servername="localhost";
  $dbname="feedback";

  $cnn=new mysqli($servername,$username,$password,$dbname);
  if($cnn){
    // echo "connection succesfully";
    ?>
    <script type="text/javascript">
      alert('connection succesfully done');
    </script>
    <?php
  }else
    echo "no connection";



if(isset($_POST['submit'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $mobilenum=$_POST['mob_no'];
    $email=$_POST['email'];
    $feedback=$_POST['feedback'];
  

    $insertQuery="insert into user_details(first_name,last_name,phone_num,email,message)
    values('$fname','$lname','$mobilenum','$email','$feedback')";

    $result=mysqli_query($cnn, $insertQuery);

    if($result){
      ?>
      <script type="text/javascript">
        alert('Data inserted properly');
      </script>
      <?php
    }else{
      ?>
      <script type="text/javascript">
        alert('Data not inserted properly');
      </script>
      <?php
    }
}
?>
</div>
</body>
</html>