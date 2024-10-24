<!DOCTYPE html>
<html>

<head>
	
	<title>Booking - Fusion Bike Rentals</title>
<link rel="icon" href="img/icon.png" type="image/icon type">
</head>

<body>
	
		<?php

		 

		// servername => localhost
		// username => root
		// password => empty
		// database name => bikerentall
		$conn = mysqli_connect("localhost", "root", "", "bikerentall");
		
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}

		session_start();
		$emailid = $_SESSION['username'];

		if ($emailid == ""){
			$loginfirst = "<script>alert('Please login first!!!')</script>";
			header("Location: http://localhost/bikerentall/bikeslist.php?message=$loginfirst");
			exit();

		}

		$vehicleid = $_REQUEST['VehicleId'];
		$fromdate = $_REQUEST['fromdate'];
		$todate = $_REQUEST['todate'];
		$message = $_REQUEST['message'];	

		$date1 = new DateTime("$fromdate");
		$date2 = new DateTime("$todate");
		$interval = $date1->diff($date2);
		$days = $interval->d +1;
		intval($days);
		
		$price = $_REQUEST['ttlprice'];
		floatval($price);

		$ttlprice = $days*$price;
		floatval($ttlprice);
		
		$sql = "INSERT INTO tblbooking(EmailId,VehicleId,FromDate,ToDate,days_booked,message,Price) VALUES ('$emailid','$vehicleid','$fromdate','$todate','$days','$message',$ttlprice)";
		
		if(mysqli_query($conn, $sql)){

			$registered = "<script>alert('Booking was successful!!!')</script>";
			header("Location: http://localhost/bikerentall/userbooking.php?message=$registered"); 
				exit();

		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}

		mysqli_close($conn);
		?>
	
</body>

</html>
