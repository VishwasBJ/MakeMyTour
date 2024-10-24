<!DOCTYPE html>
<html>

<head>
<title>My Bookings</title>
<link rel="icon" href="img/icon.png" type="image/icon type">
<style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse:collapse;
        }
    </style>
</head>

<body>

<?php
error_reporting(0);
 session_start();

    if(!empty($_GET['message'])) {
        $message = $_GET['message'];
        echo "$message";
    }

     ?>

    <?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "bikerentall";

// Create connection
$conn = mysqli_connect("localhost", "root", "", "bikerentall");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

session_start();
$email = $_SESSION['username'];



$sql = "SELECT tblbooking.id,tblbooking.EmailId,VehicleId,FromDate,ToDate,days_booked,Price, message,tblusers.FullName from tblbooking inner join tblusers on tblusers.EmailId=tblbooking.EmailId where tblbooking.EmailId ='$email'";
$result = mysqli_query($conn,$sql);

if ($result->num_rows > 0) {
    echo "
    <caption style='text-align:center'>Your Booking Details:</caption>
    <table>
    <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Vehicle Id</th>
    <th>PickUp Date</th>
    <th>Drop Date</th>
    <th>Days Booked</th>
    <th>Price</th>
    <th>Message</th>
    
    </tr>";


    while($row = $result->fetch_assoc()) {
    
        echo "<tr><td>" . $row["id"]. "</td><td>"
         . $row["FullName"]. "</td><td> "
         . $row["EmailId"]. "</td><td> "
         . $row["VehicleId"]. "</td><td> "
         . $row["FromDate"]. "</td><td> "
         . $row["ToDate"]. "</td><td> "
         . $row["days_booked"]. "</td><td> "
         . $row["Price"]. "</td><td> "
         . $row["message"]. "</td></tr> ";
        
    }
         
    echo "</table>";
    
} else {
    echo "0 results";
}

$conn->close();
?>

</body>

</html>