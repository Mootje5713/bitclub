<?php
include "connection.php";
include "navbarintro.php";
session_start();
$host = 'localhost';
$db   = 'bitclub';
$user = 'bitclub';
$pass = 'GERK@rouh-crir5zur';
$charset = 'utf8mb4';
?>

<html>
    <head>
        <link rel="stylesheet" href="info.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@300&display=swap" rel="stylesheet">
        <link rel="icon" href="favicon.ico">
	    <title>BitClub | Info</title>
    </head>
    <body>
    <?php
    if (isset($_SESSION['username'])) {
    loggednavbar($connect);
    ?>
        <div id="blok1">
            <h1 id="h1">Wat is de Bit Academy</h1>
            <p id="p1">Op de Bit Academy kan je een Software Developer MBO opleiding volgen op niveau 4.
                Bij de Bit Academy werk je met de nieuwste tech en kan je zelf je eigen studie richting kiezen.
                Als Software Developer werk je aan het ontwikkelen van programmas en websites.</p>
        </div>
        <img src="images/blok1jpg.jpg" id="blok1jpg">
        <img src="images/img2.jpg" id="img2">
        <div id="blok2">
            <h1 id="h11">Wat leer je allemaal op de Bit Academy</h1>
            <p id="p2">Op de Bit Academy leer programmeren in verschillende programmeertalen zoals PHP, Java, C++ en/of JavaScript. Op de Bit Academy leer programmeren in verschillende programmeertalen zoals PHP, Java, C++ en/of JavaScript. Je leert hoe je websites maakt en hoe je applicaties maakt voor op het web of op mobiel.</p>
        </div>
        <p id="p3">Als je je wilt aanmelden voor de Bit Academy, kan je naar de website gaan van de <a href="https://www.bit-academy.nl" id="bit">Bit Academy</a></p>
        <h1 id="code"><a href="home.php" id="code2">Lets code!</a></h1>
        <!-- Character met tekstbubbel -->
        <div id="bubble"><p id="p1bubble">Welkom op de informatie pagina over de Bit Academy!</p>
        <img src="arrow.png" id="arrow1" onclick="nextBubble()">
        <img src="arrow.png" id="arrow2" onclick="nextBubble2()">
        <img src="arrow.png" id="arrow3" onclick="nextBubble3()">
        <img src="arrow.png" id="arrow4" onclick="nextBubble4()">
        <button id="skip" onclick="skipAll()">Overslaan</button>
        </div>
        <img src="character.png" id="character">
        <div id="box"><h2>Hulp</h2></div>
        <button onclick="showBubble()" id="show"><img src="arrowup.png" width=100%></button>
        <script src="info.js"></script>
    </body>
</html>
<?php
    } else {
        navbarr();
        ?>
                <div id="blok1">
            <h1 id="h1">Wat is de Bit Academy</h1>
            <p id="p1">Op de Bit Academy kan je een Software Developer MBO opleiding volgen op niveau 4.
                Bij de Bit Academy werk je met de nieuwste tech en kan je zelf je eigen studie richting kiezen.
                Als Software Developer werk je aan het ontwikkelen van programmas en websites.</p>
        </div>
        <img src="images/blok1jpg.jpg" id="blok1jpg">
        <img src="images/img2.jpg" id="img2">
        <div id="blok2">
            <h1 id="h11">Wat leer je allemaal op de Bit Academy</h1>
            <p id="p2">Op de Bit Academy leer programmeren in verschillende programmeertalen zoals PHP, Java, C++ en/of JavaScript. Op de Bit Academy leer programmeren in verschillende programmeertalen zoals PHP, Java, C++ en/of JavaScript. Je leert hoe je websites maakt en hoe je applicaties maakt voor op het web of op mobiel.</p>
        </div>
        <p id="p3">Als je je wilt aanmelden voor de Bit Academy, kan je naar de website gaan van de <a href="https://www.bit-academy.nl" id="bit">Bit Academy</a></p>
        <h1 id="code"><a href="home.php" id="code2">Lets code!</a></h1>
        <!-- Character met tekstbubbel -->
        <div id="bubble"><p id="p1bubble">Welkom op de informatie pagina over de Bit Academy!</p>
        <img src="arrow.png" id="arrow1" onclick="nextBubble()">
        <img src="arrow.png" id="arrow2" onclick="nextBubble2()">
        <img src="arrow.png" id="arrow3" onclick="nextBubble3()">
        <img src="arrow.png" id="arrow4" onclick="nextBubble4()">
        <button id="skip" onclick="skipAll()">Overslaan</button>
        </div>
        <img src="character.png" id="character">
        <div id="box"><h2>Hulp</h2></div>
        <button onclick="showBubble()" id="show"><img src="arrowup.png" width=100%></button>
        <script src="info.js"></script>
    </body>
</html>
<?php
    }
    ?>
