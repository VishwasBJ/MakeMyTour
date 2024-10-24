<!DOCTYPE html>
<html>

<head>
<title>Admin Dashboard</title>
<link rel="icon" href="img/icon.png" type="image/icon type">
    <style>
        table,
        th,
        td {
            border: 1px solid red;
            border-collapse:collapse;
            border-radius:3px;
            text-align:center;
            padding:5px;
        }
        h3{
            color:black;
        }
    </style>
</head>

<body>

    <?php

    error_reporting(0);
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

$sql1 = "SELECT * from tblusers";
$result = $conn->query($sql1);

if ($result->num_rows > 0) {
    echo "
    <h3>Registered Users:</h3>
    <table>
    <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Password</th>
    <th>License</th>
    </tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
    
        echo "<tr><td>" . $row["id"]. "</td><td>"
         . $row["FullName"]. "</td><td> "
         . $row["EmailId"]. "</td><td> "
         . $row["Phone"]. "</td><td> "
         . $row["Password"]. "</td><td> "
         . $row["License"]. "</td></tr> ";
        
    }
         
    echo "</table>";
    
} else {
    echo "0 results";
}

echo "<br><br>";


$sql2 = "SELECT tblbooking.id,tblbooking.EmailId,VehicleId,FromDate,ToDate,days_booked,Price, message,tblusers.FullName from tblbooking inner join tblusers on tblusers.EmailId=tblbooking.EmailId";
$result = mysqli_query($conn,$sql2);

if ($result->num_rows > 0) {
    echo "
    <h3>Booking Details:</h3>
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

echo "<br><br>";

$sql3 = "SELECT * from tblfeedback";
$result = mysqli_query($conn,$sql3);

if ($result->num_rows > 0) {
    echo "
    <h3>Visitor Feedbacks:</h3>
    <table>
    <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Message</th>
    
    </tr>";


    while($row = $result->fetch_assoc()) {
    
        echo "<tr><td>" . $row["fid"]. "</td><td>"
         . $row["FullName"]. "</td><td> "
         . $row["EmailId"]. "</td><td> "
         . $row["Phone"]. "</td><td> "
         . $row["Message"]. "</td></tr> ";
        
    }
         
    echo "</table>";
    
} else {
    echo "0 results";
}

$conn->close();
?>

</body>

</html>