<!DOCTYPE html>
<html>

<head>
<title>Feedback - Fusion Bike Rentals</title>
<link rel="icon" href="img/icon.png" type="image/icon type">
</head>

<body>
	
		<?php

		$conn = mysqli_connect("localhost", "root", "", "bikerentall");
	
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}		

		$name = $_REQUEST['name'];
		$email = $_REQUEST['email'];
		$phone = $_REQUEST['phone'];
		$message = $_REQUEST['message'];

		$sql = "INSERT INTO tblfeedback(FullName,EmailId,Phone,Message) VALUES ('$name',
			'$email','$phone','$message')";
		
		if(mysqli_query($conn, $sql)){

			echo "<h3>Thanks for your feedback!!!";

		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
	
		mysqli_close($conn);
		?>
	
</body>

</html>
