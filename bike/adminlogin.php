<!DOCTYPE html>
<html>

<head>
<title>Admin Login - Fusion Bike Rentals</title>
<link rel="icon" href="img/icon.png" type="image/icon type">
</head>

<body>

<?php
session_start();

if(isset($_POST["username"], $_POST["psw"])) 
    {     

        $username = $_POST["username"]; 
        $password = $_POST["psw"]; 

        $conn = mysqli_connect("localhost", "root", "", "bikerentall");

        if($result = mysqli_query($conn,"SELECT * FROM admin WHERE Username = '$username' AND  Password = '$password'")){

        

        $rowcount = mysqli_num_rows($result);
        if($rowcount>0){
            $row = mysqli_fetch_assoc($result);
        
            header("Location: http://localhost/bikerentall/admindash.php"); 
            // echo'Welcome admin!!!';
        }
        else
        {
            echo 'The username or password are incorrect!';
        }
    }
}
?>
</body>

</html>