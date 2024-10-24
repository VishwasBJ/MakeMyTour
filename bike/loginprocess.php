<!DOCTYPE html>
<html>

<head>
<title>User Login - Fusion Bike Rentals</title>
<link rel="icon" href="img/icon.png" type="image/icon type">
</head>

<body>



<?php
    $host="localhost"; // Host name
    $username="root"; // MySQL username
    $password=""; // MySQL password
    $db_name="bikerentall"; // Database name
    $tbl_name="tblusers"; // Table name

    // Connect to the server and select a database.
   $conn= mysqli_connect("$host", "$username", "$password") or die("cannot connect");
    mysqli_select_db($conn,"$db_name") or die("cannot select DB");

    // Username and password sent from the form
    $username = $_POST['email'];
    $password = md5($_POST['psw']);

    // To protect MySQL injection (more detail about MySQL injection)
    $username = stripslashes($username);
    // $password = stripslashes($password);
    $username = mysqli_real_escape_string($conn,$username);
    // $password = mysqli_real_escape_string($conn,$password);
    $sql = "SELECT * FROM $tbl_name WHERE EmailId='$username' and Password='$password'";
    $result = mysqli_query($conn,$sql);

    // Mysql_num_row is counting the table rows
    $count=mysqli_num_rows($result);
    $row = mysqli_fetch_assoc($result);

    // If the result matched $username and $password, the table row must be one row
    if($count == 1){
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        $_SESSION['fname'] = $FullName;
        $name = $_SESSION['fname'];
      
        $welcome = "<script>alert('Welcome' )</script>";
        header("Location: http://localhost/bikerentall/bikeslist.php?message=$welcome");
// header('location: http://localhost/bikerentall/bikeslist.php');

        
        exit();
    }else
    {
        echo 'The username or password are incorrect!';
    }
?>

</body>

</html>
