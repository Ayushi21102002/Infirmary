
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="feedback.css">
</head>
<body>
<div class="navbar">
        <img src="project/logo_final.png" class="logo">
      </div>
<button class="open-button" onclick="openForm()" required><B>Feedback</B></button>

<div class="form-popup" id="myForm">
  <form action="" class="form-container" method="post">
    <center><h1>Feedback</h1></center>

    <input type="text" placeholder="First Name" name="fname" required autofocus="true">
    <input type="text" placeholder="Last Name" name="lname" required>
    <input type="text" placeholder="Phone Number" name="mob_no" required>
    <input type="text" placeholder="Email" name="email" required>
    <input type="text" placeholder="Your Feedback" name="feedback" required>

    <input type="submit" class="btn" name="submit" value="Send Feedback"/>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

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
        alert('Thanks For your response !!');
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
</body>
</html>
