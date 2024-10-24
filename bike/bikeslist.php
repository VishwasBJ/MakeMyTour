<!DOCTYPE html>
<html lang="en">

<head>

<?php
error_reporting(0);
 session_start();

    if(!empty($_GET['message'])) {
        $message = $_GET['message'];
        echo "$message"; 
    }

    if(!empty($_GET['message'])) {
        $message = $_GET['message'];
        echo "$message"; 
    }
     ?>


    <title>Listing - Fusion Bike Rentals</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="header.css" type="text/css">
    <link rel="stylesheet" href="bikelist.css" type="text/css">
    <link rel="stylesheet" href="footer.css" type="text/css">

    <link rel="icon" href="img/icon.png" type="image/icon type">

    <script src="https://kit.fontawesome.com/a0dd728323.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="javascript.js"></script>
</head>

<body>
 

    <div class="header">
        <div class="logo">
            <a href="index.html"><img src="img/logo.png" height="60" width="200" alt="logo"></a>
        </div>
        <div class="nav">
            <ul class="list1">
                <li><a class="a" href="index.html">Home</a></li>
                <li><a class="b" href="about.html">About Us</a></li>
                <li><a class="c active" href="http://localhost/bikerentall/bikeslist.php">Bike Listing</a></li>
                <li><a class="d" href="contact.html">Contact Us</a></li>
            </ul>
        </div>

        <div class="dropdown">
            <button onclick="myFunction()" class="dropbtn"> <i class='fas fa-user-circle'></i> Login/Register   <i class="fa fa-caret-down"></i></button>
            <div id="myDropdown" class="dropdown-content">
                <a href="register.html">Register as user</a>
                <hr/>
                <a href="userlogin.html">Login as user</a>
                <hr/>
                <a href="adminlogin.html">Login as admin</a>
                <hr/>
                <a href="http://localhost/bikerentall/signout.php">Signout</a>

            </div>
        </div>

        <script>
            /* When the user clicks on the button,toggle between hiding and showing the dropdown content */
            function myFunction() {
                document.getElementById("myDropdown").classList.toggle("show");
            }

            // Close the dropdown if the user clicks outside of it
            window.onclick = function(event) {
                if (!event.target.matches('.dropbtn')) {
                    var dropdowns = document.getElementsByClassName("dropdown-content");
                    var i;
                    for (i = 0; i < dropdowns.length; i++) {
                        var openDropdown = dropdowns[i];
                        if (openDropdown.classList.contains('show')) {
                            openDropdown.classList.remove('show');
                        }
                    }
                }
            }
        </script>
        <div class="mysite">
            <ul class="list2">
                <li>
                    <a href="#" target="_blank"><img class="a" src="img/facebook.png" alt="Facebook" /></a>
                </li>
                <li>
                    <a href="#" target="_blank"><img class="b" src="img/instagram.png" alt="Instagram" /></a>
                </li>
                <li>
                    <a href="#" target="_blank"><img class="c" src="img/twitter.png" alt="Twitter" /></a>
                </li>
                <li>
                    <a href="#"><img class="d" src="img/email.png" alt="Mail" /></a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main">
        <div class="bgimg">
            <h1 id="top">Bikes Listing</h1>
        </div>

        <div class="booking" id="formhiding">
            <form action="http://localhost/bikerentall/booking.php" method="POST">
                <div class="container">
                    <h1>Book Now</h1><br>

                    <input type="hidden" name="VehicleId" id="VehicleId" value="">
                    <input type="hidden" id="ttlprice" name="ttlprice" value="">

                    <label for="fromdate"><b>Book From</b></label><br>
                    <input type="date" placeholder="Input Date to book from" name="fromdate" id="fromdate" required><br>

                    <label for="todate"><b>Book Until</b></label><br>
                    <input type="date" placeholder="Input Date to book until" name="todate" id="todate" required><br>

                    <label for="message"><b>Message</b></label><br>
                    <textarea name="message" id="message" cols="70" rows="7" placeholder=" Enter Message..." required></textarea><br>

                    <button type="submit">Book it</button><br><br>
                    <button type="button" onclick="functionhide()">Cancel</button><br><br>
                </div>
            </form>

        </div>


                <div class="heading">
                    <h1>Book now</h1>
                </div>

                <div class="gridbg">
        <div class="maingrid">

            <div class="grid-container">
                <div class="grid-item"><img src="img/bikeslist/aprilia.jpg" alt="bikemodel">
                    <input type="text" id="Veh1" name="VehicleId" value="V1" hidden>
                    <input type="hidden" name= "vehprice" id= "veh1price" value ="1000">
         
                    <h3>Aprilia 
                        <p id="price">1000/day</p></h3><br>
                       
                    
                    <p><button class="rentbtn" id="B1" onclick="functionshow1()">Book for rent</button></p>
                </div>




                <div class="grid-item"><img src="img/bikeslist/dio.jpeg" alt="bikemodel">
                    <input type="text" id="Veh2" name="VehicleId" value="V2" hidden>
                    <input type="hidden" name= "vehprice" id= "veh2price" value ="800">
                    <h3>Dio
                        <p>800/day</p>
                    </h3><br>
                    <p><button class="rentbtn" id="B2" onclick="functionshow2()">Book for rent</button></p>
                </div>


                <div class="grid-item"><img src="img/bikeslist/bullet350.jpg" alt="bikemodel">
                    <input type="text" id="Veh3" name="VehicleId" value="V3" hidden>
                    <input type="hidden" name= "vehprice" id= "veh3price" value ="2000">                    
                    <h3>Bullet 350
                        <p>2000/day</p>
                    </h3><br>
                    <p><button class="rentbtn" id="B3" onclick="functionshow3()">Book for rent</button></p>

                </div>
                <div class="grid-item"><img src="img/bikeslist/bullet500.jpg" alt="bikemodel">
                    <input type="text" id="Veh4" name="VehicleId" value="V4" hidden>
                    <input type="hidden" name= "vehprice" id= "veh4price" value ="2500">
                    <h3>Bullet 500
                        <p>2500/day</p>
                    </h3><br>
                    <p><button class="rentbtn" id="B4" onclick="functionshow4()">Book for rent</button></p>
                </div>
                <div class="grid-item"><img src="img/bikeslist/duke200.jpg" alt="bikemodel">
                    <input type="text" id="Veh5" name="VehicleId" value="V5" hidden>
                    <input type="hidden" name= "vehprice" id= "veh5price" value ="2000">
                    <h3>Duke 200
                        <p>2000/day</p>
                    </h3><br>
                    <p><button class="rentbtn" id="B5" onclick="functionshow5()">Book for rent</button></p>
                </div>
                <div class="grid-item"><img src="img/bikeslist/duke390.jpg" alt="bikemodel">
                    <input type="text" id="Veh6" name="VehicleId" value="V6" hidden>
                    <input type="hidden" name= "vehprice" id= "veh6price" value ="2500">
                    <h3>Duke 390
                        <p>2500/day</p>
                    </h3><br>
                    <p><button class="rentbtn" id="B6" onclick="functionshow6()">Book for rent</button></p>
                </div>
                <div class="grid-item"><img src="img/bikeslist/pulsar180.jpg" alt="bikemodel">
                    <input type="text" id="Veh7" name="VehicleId" value="V7" hidden>
                    <input type="hidden" name= "vehprice" id= "veh7price" value ="1500">
                    <h3>Pulsar 180
                        <p>1500/day</p>
                    </h3><br>
                    <p><button class="rentbtn" id="B7" onclick="functionshow7()">Book for rent</button></p>
                </div>
                <div class="grid-item"><img src="img/bikeslist/pulsar200.jpg" alt="bikemodel">
                    <input type="text" id="Veh8" name="VehicleId" value="V8" hidden>
                    <input type="hidden" name= "vehprice" id= "veh8price" value ="2000">
                    <h3>Pulsar 200
                        <p>2000/day</p>
                    </h3><br>
                    <p><button class="rentbtn" id="B8" onclick="functionshow8()">Book for rent</button></p>
                </div>
            </div>

        </div>
        </div>
    </div>

    <div class="footer">
    <footer class="footer-distributed">
        <div class="footer-left">

            <h3>Fusion <span>Bike Rentals</span></h3>


            <ul class="footer_links">
            <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="http://localhost/bikerentall/bikeslist.php">Booking</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>

       

            <div class="footer-icons">

                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>


            </div>

        </div>

        <div class="footer_right">

            <a href="index.html"><img src="img/logo.png" height="150px" width="500px" alt="logo"></a>

        </div>

    </footer>
    </div>

</body>

</html>