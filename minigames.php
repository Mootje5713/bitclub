<?php
include 'navbarintro.php';

session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="minigames.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@300&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <title>BitClub | Game Menu</title>
    </head>
    <body>
    <?php
                    if (isset($_SESSION['username'])) {
                        loggednavbar($connect);
        ?>
        <h1>Bit Club Minigames</h1>
<h4 id="level1h4">Hieronder vind je alle minigames van de Bit Club</h4>
<div id="box">
    <div id="opdracht1html">
        <h6 id="kop1">Scramble</h6>
        <a href="./Spel_2.php"><img src="images/arrow_right.png" id="arrow"></a>
    </div>
    <div id="opdracht2html">
        <h6 id="kop2">Galgje</h6>
        <a href="./games.php"><img src="images/arrow_right.png" id="arrow"></a>
    </div>
    <div id="opdracht3html">
        <h6 id="kop3">Quiz</h6>
        <a href="./quiz.php"><img src="images/arrow_right.png" id="arrow"></a>
    </div>
    <button id="verder" onclick="window.location.href='./home.php'"><a href="./home.php" id="verder2">Terug naar de home pagina</a></button>
</div>
    <div id="bubble"><p id="p1bubble">Dit is het minigames overzicht van de Bit Club!</p>
        <img src="arrow.png" id="arrow1" onclick="nextBubble();">
        <img src="arrow.png" id="arrow2" onclick="nextBubble2();">
        <img src="arrow.png" id="arrow3" onclick="nextBubble3();">
        <img src="arrow.png" id="arrow4" onclick="nextBubble4();">
        <button id="skip" onclick="skipAll();">Overslaan</button>
    </div>
    <img src="character.png" id="character">
    <div id="boxhulp"><h2 id="hulp">Hulp</h2></div>        
    <button onclick="showBubble()" id="show"><img src="arrowup.png" width=100%></button>
    <script src="minigames.js"></script>

   <?php
} else {
    navbarr();
?>

<h1>Bit Club Minigames</h1>
<h4 id="level1h4">Hieronder vind je alle minigames van de Bit Club</h4>
<div id="box">
    <div id="opdracht1html">
        <h6 id="kop1">Scramble</h6>
        <a href="./Spel_2.php"><img src="images/arrow_right.png" id="arrow"></a>
    </div>
    <div id="opdracht2html">
        <h6 id="kop2">Galgje</h6>
        <a href="./games.php"><img src="images/arrow_right.png" id="arrow"></a>
    </div>
    <div id="opdracht3html">
        <h6 id="kop3">Quiz</h6>
        <a href="./quiz.php"><img src="images/arrow_right.png" id="arrow"></a>
    </div>
    <button id="verder"><a href="./home.php" id="verder2">Terug naar de home pagina</a></button>
</div>
    <div id="bubble"><p id="p1bubble">Dit is het minigames overzicht van de Bit Club!</p>
        <img src="arrow.png" id="arrow1" onclick="nextBubble();">
        <img src="arrow.png" id="arrow2" onclick="nextBubble2();">
        <img src="arrow.png" id="arrow3" onclick="nextBubble3();">
        <img src="arrow.png" id="arrow4" onclick="nextBubble4();">
        <button id="skip" onclick="skipAll();">Overslaan</button>
    </div>
    <img src="character.png" id="character">
    <div id="boxhulp"><h2 id="hulp">Hulp</h2></div>        
    <button onclick="showBubble()" id="show"><img src="arrowup.png" width=100%></button>
    <script src="minigames.js"></script>
<?php
}
?>