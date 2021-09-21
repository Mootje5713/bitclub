<?php
include 'navbar.php';
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <title>BitClub | Home</title>
    <link rel="stylesheet" type="text/css" href="homepagina.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">  
</head>
<body>

    <div class="typewriter">
        <div class="typewriter-text">Welkom, Bij BitClub!</div>
    </div>
<?php
if (isset($_SESSION['username'])) {
        echo "
            <html lang='en'>
            
        <head>
            <link rel='stylesheet' href='styles.css'>
            <link rel='preconnect' href='https://fonts.gstatic.com/%22%3E
            <link href='https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@300&display=swap' rel='stylesheet'>
            <meta name='viewport' content='width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no'>
            <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
            <meta name='HandheldFriendly' content='true'>
        </head>
        <body>
            <div id='navbar'>
                <ul>
                    <a href='#' target='#'><img src='logo2.png' alt='logo' class='logon'></a>
                    <li class='boi'><a href='contact/contact.php'>Contact</a></li>
                    <li class='boi'><a href='overons.php'>Over ons</a></li>
                  
                </ul>
                <div class='knoppen'>
                <form method='POST' action='".userlogout($connect)."'>
                    
                <button type='submit' class='logout' name='logoutsubmit'>Uitloggen</button>
                      </form>         
                </div>
            </div>
    
        </body>
    </html>";
    
    ?>


    <img id="log1" src="logohome.png" alt="log Logo">
    <p id="kast">Benieuwd hoe je bij de Bit Academy te werk gaat? <br>Ga op pad op onze website, en leer hoe de Bit Academy werkt. <br>Kies jij voor Game Developer of Software Developer?<br> Bekijk alle opties op BitClub.</p>
    <button id="universe" onclick="window.location.href='home.php'"><a href="home.php" id="meer2">Start Hier</button></a>



    <div id="tag">
        <a id='link' href="https://www.bit-academy.nl/">www.bitacademy.nl</a>
    </div>
    <div id="logos">
        <a href="https://www.instagram.com/bit_academy_/">
        <img id="insta" src="instagram.png" alt="Insta Logo">
        </a>
        <a href="https://www.linkedin.com/school/bit-academy-nl/?originalSubdomain=nl">
        <img id="linkedin" src="Linkedin.png" alt="LinkedIn Logo">
        </a>
        <a href="https://www.facebook.com/wearebitacademy/">
        <img id="facebook" src="Facebook.png" alt="facebook Logo">
        </a>
    </div>
</body>
</html>
<?php
}   else {
                
        echo "
        <html lang='en'>
        
    <head>
        <link rel='stylesheet' href='styles.css'>
        <link rel='preconnect' href='https://fonts.gstatic.com/%22%3E
        <link href='https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@300&display=swap' rel='stylesheet'>
        <meta name='viewport' content='width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
        <meta name='HandheldFriendly' content='true'>
    </head>
    <body>
        <div id='navbar'>
            <ul>
                <a href='#' target='#'><img src='logo2.png' alt='logo' class='logon'></a>
                <li><a href='login.php'>Login</a></li>
                <li><a href='contact/contact.php'>Contact</a></li>
                <li><a href='overons.php'>Over ons</a></li>
            </ul>
        </div>
    </body>
    </html>";
    
    ?>
        <img id="log1" src="logohome.png" alt="log Logo">
    <p id="kast">Benieuwd hoe je bij de Bit Academy te werk gaat? <br>Ga op pad op onze website, en leer hoe de Bit Academy werkt. <br>Kies jij voor Game Developer of Software Developer?<br> Bekijk alle opties op BitClub.</p>
    <button id="universe" onclick="window.location.href='home.php'"><a href="home.php" id="meer2">Start Hier</button></a>



    <div id="tag">
        <a id='link' href="https://www.bit-academy.nl/">www.bitacademy.nl</a>
    </div>
    <div id="logos">
        <a href="https://www.instagram.com/bit_academy_/">
        <img id="insta" src="instagram.png" alt="Insta Logo">
        </a>
        <a href="https://www.linkedin.com/school/bit-academy-nl/?originalSubdomain=nl">
        <img id="linkedin" src="Linkedin.png" alt="LinkedIn Logo">
        </a>
        <a href="https://www.facebook.com/wearebitacademy/">
        <img id="facebook" src="Facebook.png" alt="facebook Logo">
        </a>
    </div>
</body>
</html>
<?php
}
?>

