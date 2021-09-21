<?php
include 'dbhA.php';
try {
    $connect = new PDO("mysql:host=$host;dbname=$db;charset=$charset", $user, $pass);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "DB Connection failed" . $e->getMessage();
}
 function navbarr() {
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
                <a href='index.php' target='#'><img src='logo2.png' alt='logo' class='logon'></a>
                <li><a href='login.php'>Login</a></li>
                <li><a href='contact/contact.php'>Contact</a></li>
                <li><a href='Gallery/gallery.php'>Gallery</a></li>
            </ul>
        </div>
    </body>
</html>";
}
function loggednavbar($connect) {
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
                <a href='index.php' target='#'><img src='logo2.png' alt='logo' class='logon'></a>
                <li class='boi'><a href='contact/contact.php'>Contact</a></li>
                <li class='boi'><a href='Gallery/gallery.php'>Gallery</a></li>
              
            </ul>
            <div class='knoppen'>
            <form method='POST' action='".userlogout($connect)."'>
                
            <button type='submit' class='logout' name='logoutsubmit'>Uitloggen</button>
                  </form>         
            </div>
        </div>

    </body>
</html>";
}     
function logged($connect) {
echo "
<html lang='en'>

<head>
<meta charset='UTF-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<link rel='stylesheet' href='style.css'>
<script src='script.js'></script>
<title>Bit Forum</title>
</head>

<body class='body'>

<div class='boven' id='hidenavbar'>
    <div class='navbar'>

        <div>
            <a href=website.php>
            <img class='image' src='logo_small.png'>
            </a>
        </div>

        <div class='zoekbalk'>
            <form action='/action_page.php'>
                <input  type='hidden' class='zoekbalk' placeholder='Zoeken' name='search'>
            </form>
        </div>

        <div class='inloggen'>
            <div class='knoppen'>
                <form action='' method='POST'>
                <a class='login' href='login.php'>Login</a>
                <a class='registreer' href='Registreer.php'>Registreer</a>
                  </form>            
            </div>

            <div class='float_right'>
                <li class='navigationbar_li navigationbar_li_right'><a class='navigationbar_a' href='#'><img
                            class='png mens' src='outline_account_circle_white_24dp.png'><img
                            class='png arrow' src='outline_arrow_drop_down_white_24dp.png'></a>
                    <ul style='list-style-type:none' class='dropdown_ul'>
                        <li class='dropdown_li'><a class='dropdown_a'>Link 1</a>
                        </li>
                        <li class='dropdown_li'><a class='dropdown_a'>Link 2</a>
                        </li>
                    </ul>
                </li>
            </div>
        </div>
    </div>
</div>

<div>
</div>

<div>
</div>

</body>

</html>";
}  
function loggednavbarhome($connect) {
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
                <a href='index.php' target='#'><img src='logo2.png' alt='logo' class='logon'></a>
                <li class='boi'><a href='contact/contact.php'>Contact</a></li>
                <li class='boi'><a href='/Gallery/gallery.php'>Gallery</a></li>
              
            </ul>
            <div class='knoppen'>
            <form method='POST' action='".userlogout($connect)."'>
                
            <button type='submit' class='logouthome' name='logoutsubmit'>Uitloggen</button>
                  </form>         
            </div>
        </div>

    </body>
</html>";
}     



function userlogout($connect) {
    if (isset($_POST['logoutsubmit'])) {
        session_destroy();
        header("Refresh:0");
        exit();
    }
}





?>