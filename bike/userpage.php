<?php
    session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    echo "Welcome to the member's area, " . $_SESSION['username'] . "!";
}
else {
    echo "Please log in first to see this page.";
        echo 'not logged in';
        header("Location: userlogin.html");
        exit;
    }

?>