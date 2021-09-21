<?php
include "navbar.php";
include "connection.php";
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="overons.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@300&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@100&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="HandheldFriendly" content="true">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <title>BitClub | Over ons</title>
    </head>
    <body>
        <?php
        if (isset($_SESSION['username'])) {
            loggednavbar($connect);

        ?>
        <div id="namen">
        <p id="jean">Jean & Mauro</p>
            <div class="hide"><q>Front-End Developers voor dit project, wij hebben voornamelijk gewerkt aan de grote delen van de interface.</q></div>
        <p id="mohammed">Mohammed</p>
            <div class="hide2">Ik ben bezig geweest met de connecties tussen de database en PHP. Ik ben ook bezig geweest met scrabble en de reviewpagina</div>
        <p id="azlaan">Azlaan<p>
            <div class="hide3">Ik heb gewerkt aan de database, code verbeteren van anderen. Ook heb ik de extra connecties gelegd tussen pagina's en databases.</div>  
        <p id="hicham">Hicham</p>
            <div class="hide4">Ik ben vooral bezig geweest met de quiz en het bewerken van de minigames pagina erbij.</div>
    </div>

    <div>
        <div id="box"></div>
        <img id="bclub" src="wp.jpg" alt="Bitclub Logo">
        <p id="boxt">Samen met zn alle hebben wij hard <br>gewerkt aan dit project <br> en erg genoten van het proces.<br> En zijn we allemaal blij dat we <br> nieuwe mensen hebben<br> leren kennen.</p>
        <p id="titelb">Onze ervaring.</p>
        <img id="line" src="thin-black-line.png" alt="LinkedIn Logo">
        <P id="aboutt">Over Ons.</P>
    </div>    

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
        } else {
            navbarr();
        
        ?>
        <div id="namen">
        <p id="jean">Jean & Mauro</p>
            <div class="hide">Front-End Developer voor dit project, Heeft voornamelijk gewerkt aan de grote delen van de interface.</div>
        <p id="mohammed">Mohammed</p>
            <div class="hide2">Ik ben bezig geweest met de connecties tussen de database en PHP. Ik ben ook bezig geweest met scrabble en de reviewpagina</div>
        <p id="azlaan">Azlaan<p>
            <div class="hide3">Ik heb meer gewerkt aan de database, code verbeteren van anderen. En de extra connecties leggen tussen pagina's en databases. </div>  
        <p id="hicham">Hicham</p>
            <div class="hide4">Ik ben vooral bezig geweest met de quiz, en het bewerken van de minigame pagina erbij.</div>
    </div>

    <div>
        <div id="box"></div>
        <img id="bclub" src="wp.jpg" alt="Bitclub Logo">
        <p id="boxt">Samen met zn alle hebben wij hard <br>gewerkt aan dit project <br> en erg genoten van het proces.<br> En zijn we allemaal blij dat we <br> nieuwe mensen hebben<br> leren kennen.</p>
        <p id="titelb">Onze ervaring.</p>
        <img id="line" src="thin-black-line.png" alt="LinkedIn Logo">
        <P id="aboutt">Over Ons.</P>
    </div>    

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