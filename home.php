<?php
include 'navbar.php';
include 'dbhA.php';
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="home.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="home.css"> 
        <title>BitClub | Universe</title>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">  
    </head>
    <body>
    <?php

if (isset($_SESSION['username'])) {
    loggednavbarhome($connect);
    echo'<a href="#"><button id="home">Home</button></a>
    <a href="Reacties.php"><button id="reviews">Reviews</button></a>
    <a href="intro.php"><button id="intro">Intro</button></a>
    <a href="info.php"><button id="info">Info</button></a>
    <a href="exercises/exercises.php"><button id="exercises">Exercises</button></a>
    <a href="locaties/locaties.php"><button id="locaties">Locaties</button></a>
    <div id="lijn1"></div>
    <div id="lijn2"></div>
    <div id="lijn3"></div>
    <div id="lijn4"></div>
    <div id="lijn5"></div>
    <div id="lijn6"></div>
    <div id="lijn7"></div>
    <div id="lijn8"></div>

    <a href="minigames.php"><button id="minigames">Minigames</button>
    <div id="logos"></div>
';
} else {


    navbarr();


 ?>
        
        <a href="#"><button id="home">Home</button></a>
        <a href="Reacties.php"><button id="reviews">Reviews</button></a>
        <a href="intro.php"><button id="intro">Intro</button></a>
        <a href="info.php"><button id="info">Info</button></a>
        <button id="exercises2">Exercises</button></a>
        <a href="./locaties/locaties.php"><button id="locaties">Locaties</button></a>
        <button id="minigames2">Minigames</button>

        <div class="container">


<button type="button" id="minigames2" data-toggle="modal" data-target="#myModal">Minigames</button>
<button type="button" id="exercises2" data-toggle="modal" data-target="#myModal">Exercises</button>
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
  
          <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Er is iets fout gegaan!</h4>
      </div>
      <div class="modal-body">
        <p>Je moet ingelogd zijn om naar deze module te kunnen gaan.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
    
  </div>
</div>

</div>

        <div id="lijn1"></div>
        <div id="lijn2"></div>
        <div id="lijn3"></div>
        <div id="lijn4"></div>
        <div id="lijn5"></div>
        <div id="lijn6"></div>
        <div id="lijn7"></div>
        <div id="lijn8"></div>



        <?php
}
?>
        <div id="logos"></div>
        <a href="https://www.instagram.com/bit_academy_">
        <img id="insta" src="images/instagram.png" alt="Insta Logo">
        </a>
        <a href="https://www.linkedin.com/school/bit-academy-nl/">
        <img id="linkedin" src="images/linkedin.png" alt="LinkedIn Logo">
        </a>
        <a href="https://www.facebook.com/wearebitacademy">
        <img id="facebook" src="images/facebook.png" alt="facebook Logo">
        </a>
        <div id="bubble"><p id="p1bubble">Hey jij daar, welkom op de introductie website van de Bit Academy, genaamd Bit Club!</p>
        <img src="arrow.png" id="arrow1" onclick="nextBubble();">
        <img src="arrow.png" id="arrow2" onclick="nextBubble2();">
        <img src="arrow.png" id="arrow3" onclick="nextBubble3();">
        <img src="arrow.png" id="arrow4" onclick="nextBubble4();">
        <img src="arrow.png" id="arrow5" onclick="nextBubble5();">
        <button id="skip" onclick="skipAll();">Overslaan</button>
        </div>
        <img src="character.png" id="character">
        <div id="box"><h2>Hulp</h2></div>
        <button onclick="showBubble()" id="show"><img src="arrowup.png" width=100%></button>
        <script src="home.js"></script>
    </body>
</html>
