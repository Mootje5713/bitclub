<?php
include "navbarintro.php";
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="intro.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@300&display=swap" rel="stylesheet">
        <link rel="icon" href="favicon.ico">
	    <title>BitClub | Intro</title>
    </head>
    <body>
        <?php
        if (isset($_SESSION['username'])) {
            loggednavbar($connect);
            ?>
            <h1 id="eerste">Welkom op de BitClub!</h1>
            <p id="introp1">Dit is de introductie pagina van de BitClub. Op deze pagina kan je zien wat in elke module te vinden is en waar elke module over gaat.<br>Alle nodige informatie over de modules staat hieronder.</p>
            <div id="blok1">
                <h2 id="exercises">Exercises</h2>
                <p id="p1">Je kan op deze website opdrachten maken, die je op bijna dezelfde werkwijze maakt als op de Bit Academy. Je krijgt een korte omschrijving, daarna zie je de stappen die je moet nemen om de opdracht te maken, leerdoelen, zodat je weet welke kennis je allemaal moet hebben na het voltooien van de opdrachten, je krijgt een uitleg over nieuwe technieken die je in de opdracht moet gebruiken en als laatste een verwachte uitkomst.<br>
                    Als je een opdracht hebt voltooid, kan je drukken op de "Antwoord" knop, deze knop is er in Jarvis zelf niet, in Jarvis zelf moet je de opdracht gewoon inleveren en wordt je opdracht nagekeken door mede-studenten.<br>
                    </p>
            </div>
            <div id="blok2">
                <h2 id="exercises2">Info</h2>
                <p id="p2">Op de informatie pagina is alle nodige informatie te vinden over de opleiding Software Developer die je volgt op de Bit Academy. Je kan dingen vinden zoals de duur van de opleiding, wat je allemaal leert op de Bit Academy en waar je kunt gaan werken met een baan als Software Developer. Om nog meer te lezen over deze opleiding kan je hieronder klikken!<br><br><a href="https://www.rocva.nl/MBO-onderwijs/Sectoren/ICT/Software-Developer-op-de-Bit-Academy" id="info">Lees verder!</a></p>
            </div>
            <div id="blok3">
                <h2 id="exercises3">Reviews</h2>
                <p id="p3">De review pagina laat je reviews lezen die leerlingen of oud-leerlingen hebben achtergelaten over de Bit Academy. Als je bent ingelogd kan je zelf ook een review achter laten voor de Bit Academy. Klik hier beneden om naar de review pagina te gaan!</p>
            </div>
            <div id="blok4">
                <h2 id="exercises4">Minigames</h2>
                <p id="p4">Op de minigames pagina kan je minigames spelen zoals een quiz die gaat over de Bit Academy en leuke spelletjes zoals galgje en zelfs nog een woordzoeker! Klik hier beneden om naar minigames te gaan!</p>
            </div>
            <button id="knop"><a href="index.php" id="home">Terug naar de homepagina!</a></button>
            <h6>Hi</h6>
            <div id="bubble"><p id="p1bubble">Welkom op de intro pagina, hier kan je informatie vinden over alle modules!</p>
            <img src="arrow.png" id="arrow1" onclick="nextBubble();">
            <img src="arrow.png" id="arrow2" onclick="nextBubble2();">
            <img src="arrow.png" id="arrow3" onclick="nextBubble3();">
            <img src="arrow.png" id="arrow4" onclick="nextBubble4();">
            <button id="skip" onclick="skipAll();">Overslaan</button>
            </div>;
            <img src="character.png" id="character">;
            <div id="box"><h2 id="hulp">Hulp</h2></div>
            <button onclick="showBubble()" id="show"><img src="arrowup.png" width=100%></button>
            <script src="intro.js"></script>
            </body>
        </html>
        <?php
        } else {
            navbarr();
            ?>
        
        <h1 id="eerste">Welkom op de BitClub!</h1>
        <p id="introp1">Dit is de introductie pagina van de BitClub. Op deze pagina kan je zien wat in elke module te vinden is en waar elke module over gaat.<br>Alle nodige informatie over de modules staat hieronder.</p>
        <div id="blok1">
            <h2 id="exercises">Exercises</h2>
            <p id="p1">Je kan op deze website opdrachten maken, die je op bijna dezelfde werkwijze maakt als op de Bit Academy. Je krijgt een korte omschrijving, daarna zie je de stappen die je moet nemen om de opdracht te maken, leerdoelen, zodat je weet welke kennis je allemaal moet hebben na het voltooien van de opdrachten, je krijgt een uitleg over nieuwe technieken die je in de opdracht moet gebruiken en als laatste een verwachte uitkomst.<br>
                Als je een opdracht hebt voltooid, kan je drukken op de "Antwoord" knop, deze knop is er in Jarvis zelf niet, in Jarvis zelf moet je de opdracht gewoon inleveren en wordt je opdracht nagekeken door mede-studenten.<br>
                </p>
        </div>
        <div id="blok2">
            <h2 id="exercises2">Info</h2>
            <p id="p2">Op de informatie pagina is alle nodige informatie te vinden over de opleiding Software Developer die je volgt op de Bit Academy. Je kan dingen vinden zoals de duur van de opleiding, wat je allemaal leert op de Bit Academy en waar je kunt gaan werken met een baan als Software Developer. Om nog meer te lezen over deze opleiding kan je hieronder klikken!<br><br><a href="https://www.rocva.nl/MBO-onderwijs/Sectoren/ICT/Software-Developer-op-de-Bit-Academy" id="info">Lees verder!</a></p>
        </div>
        <div id="blok3">
            <h2 id="exercises3">Reviews</h2>
            <p id="p3">De review pagina laat je reviews lezen die leerlingen of oud-leerlingen hebben achtergelaten over de Bit Academy. Als je bent ingelogd kan je zelf ook een review achter laten voor de Bit Academy. Klik hier beneden om naar de review pagina te gaan!</p>
        </div>
        <div id="blok4">
            <h2 id="exercises4">Minigames</h2>
            <p id="p4">Op de minigames pagina kan je minigames spelen zoals een quiz die gaat over de Bit Academy en leuke spelletjes zoals galgje en zelfs nog een woordzoeker! Klik hier beneden om naar minigames te gaan!</p>
        </div>
        <button id="knop"><a href="index.php" id="home">Terug naar de homepagina!</a></button>
        <h6>Hi</h6>
        <div id="bubble"><p id="p1bubble">Welkom op de intro pagina, hier kan je informatie vinden over alle modules!</p>
        <img src="arrow.png" id="arrow1" onclick="nextBubble();">
        <img src="arrow.png" id="arrow2" onclick="nextBubble2();">
        <img src="arrow.png" id="arrow3" onclick="nextBubble3();">
        <img src="arrow.png" id="arrow4" onclick="nextBubble4();">
        <button id="skip" onclick="skipAll();">Overslaan</button>
        </div>;
        <img src="character.png" id="character">;
        <div id="box"><h2 id="hulp">Hulp</h2></div>
        <button onclick="showBubble()" id="show"><img src="arrowup.png" width=100%></button>
        <script src="intro.js"></script>
    </body>
</html>
<?php
        }
        ?>