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
	?>

?>