<!DOCTYPE html>
<html>

<head>
<title>User Registration - Fusion Bike Rentals</title>
<link rel="icon" href="img/icon.png" type="image/icon type">
</head>

<body>
	
		<?php

		// database name => bikerentall
		$conn = mysqli_connect("localhost", "root", "", "bikerentall");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}

		$name = $_REQUEST['name'];
		$email = $_REQUEST['email'];
		$phone = $_REQUEST['phone'];
		$password = md5($_REQUEST['psw']);
        $file = $_REQUEST['license'];

		
		$sql = "INSERT INTO tblusers(FullName,EmailId,Phone,Password,License) VALUES ('$name',
			'$email','$phone','$password','$file')";
		
		if(mysqli_query($conn, $sql)){
			
			header("Location: http://localhost/bikerentall/index.html"); 
				exit();

		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
	
		mysqli_close($conn);
		?>
	
</body>

</html>
