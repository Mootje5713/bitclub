<?php
include "navbar.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    </script>
    <link rel="stylesheet" href="stylespe.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="favicon.ico">
	<title>BitClub | Scramble</title>
</head>
<body>
<?php
                    if (isset($_SESSION['username'])) {
                        loggednavbar($connect);
        ?>


<div id="tag"></div>
    <a id='link' href="https://www.bit-academy.nl/">www.bitacademy.nl</a>

<div id="small-box">
    <h2>Raad jij het woord?</h2>
    <section>
            <h3 class="msg"></h3>
            <input type="text" class="hidden">
            <button class="btn">Klik hier om te raden</button>    
    </section>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


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
    <img id="pc1" src="pc1.png" alt="Een Pc">

    <button id="bt1">Meer Info!</button>
        <script src="spel_2.js" type="text/javascript" charset="UTF-8">
        </script>
</body>
</html>
<?php 
                    } else {
                        navbarr();
                        ?>
                        <div id="tag"></div>
    <a id='link' href="https://www.bit-academy.nl/">www.bitacademy.nl</a>

<div id="small-box">
    <h2>Raad jij het woord?</h2>
    <section>
            <h3 class="msg"></h3>
            <input type="text" class="hidden">
            <button class="btn">Klik hier om te raden</button>    
    </section>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


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
    <img id="pc1" src="pc1.png" alt="Een Pc">

    <button id="bt1">Meer Info!</button>
        <script src="spel_2.js" type="text/javascript" charset="UTF-8">
        </script>
</body>
</html>
<?php
                    }
                    ?>
