<?php 
include "connection.php";
session_start();
$host = 'localhost';
$db   = 'bitacademy';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';
?>


<!doctype html>
<html lang="en">
<head>
    <title>BitClub</title>
    <link rel="stylesheet" type="text/css" href="styleco.css">
</head>

<body>

    <div id="navbar">
        <ul>
            <a href="#" target="#"><img src="logo2.png" alt="logo" id="logo"></a>
            <li><a href="login.php">Login |</a></li>
            <li><a href="ContactPage/contact.php">Contact</a></li>
            <li><a href="/gallery.html">Gallery</a></li>
        </ul>
</div>


    <div id="tag"></div>
        <a id='link' href="https://www.bit-academy.nl/">www.bitacademy.nl</a>

    <div id="logos"></div>
        <a href="https://www.instagram.com/bit_academy_/">
        <img id="insta" src="instagram.png" alt="Insta Logo">
        </a>
        <a href="https://www.linkedin.com/school/bit-academy-nl/?originalSubdomain=nl">
        <img id="linkedin" src="Linkedin.png" alt="LinkedIn Logo">
        </a>
        <a href="https://www.facebook.com/wearebitacademy/">
        <img id="facebook" src="Facebook.png" alt="facebook Logo">
        </a>

        <div id="box"></div>
            <img id="maps" src="maps.png" alt="Google maps">
            <div class="Tags">
                <p id="phonetag">Phone: <a href="tel://1234567920">+ 1235 2355 98</a></p>
                <img id="call" src="call.png" alt="Call Icon">
                <p id="emailtag">Email: <a href="mailto:info@bitclub.com">info@bitclub.com</a></p>
                <img id="mail" src="mail.png" alt="Mail Icon">
                <p id="adrestag">Address: Science Park 608A,<br> 1098 XH Amsterdam</p>
                <img id="home" src="home.png" alt="home Icon">
                
        </div>

        <div class="container">
            <form method="POST" action="closepage.php">
            <input type="text" id="fname" name="firstname" placeholder="Your name.." required>
            <input type="email" id="mailname" name="email" placeholder="Your Email.." required>
            <textarea id="qeustionform" name="message" rows="10" cols="30"placeholder="Type hier uw bericht.." required></textarea>
            <p id="Naam">Naam:</p>
            <p id="mail1">Email:</p>
            <p id="bericht">Bericht:</p>
            <input id="submit" name="submit" type="submit" value="Verstuur">
        </form>
        </div>
</body>
</html>
