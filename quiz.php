<?php
include "navbar.php";
include "dbhA.php";
session_start();
?>
 <!DOCTYPE html>
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="favicon.ico">
	<title>BitClub | Quiz</title>
   </head>
   <body>
   <?php
if (isset($_SESSION['username'])) {
    loggednavbar($connect);
    ?>
       <br>
   <br>
   <br>

<h1>Welkom bij de QUIZ Bit-Academy!</h1>
<br>
<h3>Bij de QUIZ kan je jezelf testen over hoe goed jij verschillende programmeertalen kent. Ik daag jou uit om 0 fouten te krijgen. Ga jij de uitdaging aan? Zet in de comments als het jou gelukt is.
   <br>
De QUIZ is erg simpel om te spelen, Zie hier onder de spelregels.</h3>
<table id="table">

   <tr id="regels">
      <th>De spel regels: </th>
      <th>Je kiest de juiste antwoord en gaat door naar de volgende vraag (klik 1 antwoord aan)</th>
      <th>Als je alle vragen hebt beantwoord klik je op Quiz inleveren</th>
      <th>En ten slotte krijg je de resultaat van de uiz onderaan</th>
      <th>En je kan natuurlijk het zovaak opnieuw spelen hoe vaak je maar wilt SUPERRR!</th>
   </tr>


   <br>
   <br>

</table>

<div class="" id="vraag1" >
   <p class=""></p><span class="note">Vraag: 1</span></p>
   <input type="hidden" name="question_id[]">Hoe maak je een bestand aan in Visual Studio Code?
   <br>
   <input type="radio" name="question_id[]" id="antw1"><span>File -> New file</span>
   <br>
   <input type="radio" name="question_id[]"><span>File -> New window</span>
   <br>
   <input type="radio" name="question_id[]"><span>File -> Open file </span>
</div>
   <br>
<div class="" id="vraag2">
   <p class=""></p><span class="note">Vraag: 2</span></p>
   <input type="hidden" name="question_id2[]">Hoe geef je een pagina titel aan?
   <br>
   <input type="radio" name="question_id2[]"><span>Met de h1 tag</span>
   <br>
   <input type="radio" name="question_id2[]" id="antw2"><span>Met de title tag</span>
   <br>
   <input type="radio" name="question_id2[]"><span>zonder niks</span>
</div>
   <br>
<div class="" id="vraag3">
   <p class=""></p><span class="note">Vraag: 3</span></p>
   <input type="hidden" name="question_id3[]">Waar in moet je je titel typen?
   <br>
   <input type="radio" name="question_id3[]"><span>body</span>
   <br>
   <input type="radio" name="question_id3[]" id="antw3"><span>head</span>
   <br>
   <input type="radio" name="question_id3[]"><span>css</span>
</div>
   <br>
<div class="" id="vraag4">
   <p class=""></p><span class="note">Vraag: 4</span></p>
   <input type="hidden" name="question_id4[]">Is HTML een programmeertaal?
   <br>
   <input type="radio" name="question_id4[]"><span>Ja</span>
   <br>
   <input type="radio" name="question_id4[]" id="antw4"><span>Nee</span>
</div>
   <br>
<div class="" id="vraag5">
   <p class=""></p><span class="note">Vraag: 5</span></p>
   <input type="hidden" name="question_id5[]">Wat is de voledige naam van HTML?
   <br>
   <input type="radio" name="question_id5[]"><span>Hotel Techniek Middelbaar Lobby</span>
   <br>
   <input type="radio" name="question_id5[]" id="antw5"><span>Hypertext Markup Language</span>
   <br>
   <input type="radio" name="question_id5[]"><span>Hogeschool Taal Management Leiden</span>
</div>
   <br>
<div class="" id="vraag6">
   <p class=""></p><span class="note" style="color: rgb(250, 74, 4);">Vraag: 6</span></p>
   <input type="hidden" name="question_id6[]">Wat doet echo?
   <br>
   <input type="radio" name="question_id6[]"><span>Gegevens delen met andere</span>
   <br>
   <input type="radio" name="question_id6[]"><span>Gegevens verwijderen van het scherm</span>
   <br>
   <input type="radio" name="question_id6[]" id="antw6"><span>Gegevens naar het scherm sturen</span>
</div>
   <br>
<div class="" id="vraag7">
   <p class=""></p><span class="note" style="color: rgb(250, 74, 4);">Vraag: 7</span></p>
   <input type="hidden" name="question_id7[]">Voor wat wordt CSS gebruikt?
   <br>
   <input type="radio" name="question_id7[]"><span>Front-end</span>
   <br>
   <input type="radio" name="question_id7[]" id="antw7"><span>Style</span>
   <br>
   <input type="radio" name="question_id7[]"><span>Ontwerp van de website</span>
</div>
   <br>
<div class="" id="vraag8">
   <p class=""></p><span class="note" style="color: rgb(250, 74, 4);">Vraag: 8</span></p>
   <input type="hidden" name="question_id8[]">Wat is een if en else statement?
   <br>
   <input type="radio" name="question_id8[]" id="antw8"><span>Als een conditie waar is, wordt er een code uitgevoerd, anders gebeurt er iets anders</span>
   <br>
   <input type="radio" name="question_id8[]"><span>Twee zelfde uitkomsten</span>
   <br>
   <input type="radio" name="question_id8[]"><span>Dilemma</span>
</div>
   <br>
<div class="" id="vraag9">
   <p class=""></p><span class="note" style="color: rgb(250, 74, 4);">Vraag: 9</span></p>
   <input type="hidden" name="question_id9[]">Via welk programmeertaal krijg je de scripttaal van javascript als het wordt ingeladen?
   <br>
   <input type="radio" name="question_id9[]" id="antw9"><span>HTML</span>
   <br>
   <input type="radio" name="question_id9[]"><span>PHP</span>
   <br>
   <input type="radio" name="question_id9[]"><span>JAVASCRIPT</span>
</div>
   <br>
<div class="" id="vraag10">
   <p class=""></p><span class="note" style="color: rgb(250, 74, 4);">Vraag: 10</span></p>
   <input type="hidden" name="question_id10[]">Kan je javascript code type in een html bestand?
   <br>
   <input type="radio" name="question_id10[]" id="antw10"><span>Ja dat kan</span>
   <br>
   <input type="radio" name="question_id10[]"><span>Nee dat kan niet</span>
</div>
   <br>
<div class="" id="vraag11">
   <p class=""></p><span class="note" style="color: rgb(250, 74, 4);">Vraag: 11</span></p>
   <input type="hidden" name="question_id11[]">Hoe moet je beginnen met het type van javascript code in een HTML bestand?
   <br>
   <input type="radio" name="question_id11[]"><span>script -> script</span>
   <br>
   <input type="radio" name="question_id11[]" id="antw11"><span>script -> /script</span>
   <br>
   <input type="radio" name="question_id11[]"><span>gelijk type met het type van de code</span>
</div>
   <br>
<div class="" id="vraag12">
   <p class=""></p><span class="note" style="color: rgb(250, 74, 4);">Vraag: 12</span></p>
   <input type="hidden" name="question_id12[]">Hoe laad je een afbeelding in html?
   <br>
   <input type="radio" name="question_id12[]" id="antw12"><span> img src="foto.jpg" </span>
   <br>
   <input type="radio" name="question_id12[]"><span>src=foto.jpg</span>
   <br>
   <input type="radio" name="question_id12[]"><span>img source="foto.png"</span>
</div>
   <br>
   <br>
<button onclick= check() id="button1" style="background-color: rgb(250, 74, 4);">Quiz inleveren</button>

<script type="text/javascript" src="spel_1.js">

</script>
<br>
<br>
<h1><a href="https://nl.wikipedia.org/wiki/Lijst_van_programmeertalen" class="informatie" title="Verschillende programmeertalen informatie" style="color: rgb(250, 74, 4);">Wilt u meer informatie hebben over verschillende programmeertalen? Klik dan hierop!</a></h1></>     

</label>


</body>
</html>
<?php
} else {
   navbarr();
   ?>
   <br>
   <br>
   <br>
   <h1>Welkom bij de QUIZ Bit-Academy!</h1>
<br>
<h3>Bij de QUIZ kan je jezelf testen over hoe goed jij verschillende programmeertalen kent. Ik daag jou uit om 0 fouten te krijgen. Ga jij de uitdaging aan? Zet in de comments als het jou gelukt is.
   <br>
De QUIZ is erg simpel om te spelen, Zie hier onder de spelregels.</h3>
<table id="table">

   <tr id="regels">
      <th>De spel regels: </th>
      <th>Je kiest de juiste antwoord en gaat door naar de volgende vraag (klik 1 antwoord aan)</th>
      <th>Als je alle vragen hebt beantwoord klik je op Quiz inleveren</th>
      <th>En ten slotte krijg je de resultaat van de uiz onderaan</th>
      <th>En je kan natuurlijk het zovaak opnieuw spelen hoe vaak je maar wilt SUPERRR!</th>
   </tr>


   <br>
   <br>

</table>

<div class="" id="vraag1" >
   <p class=""></p><span class="note">Vraag: 1</span></p>
   <input type="hidden" name="question_id[]">Hoe maak je een bestand aan in Visual Studio Code?
   <br>
   <input type="radio" name="question_id[]" id="antw1"><span>File -> New file</span>
   <br>
   <input type="radio" name="question_id[]"><span>File -> New window</span>
   <br>
   <input type="radio" name="question_id[]"><span>File -> Open file </span>
</div>
   <br>
<div class="" id="vraag2">
   <p class=""></p><span class="note">Vraag: 2</span></p>
   <input type="hidden" name="question_id2[]">Hoe geef je een pagina titel aan?
   <br>
   <input type="radio" name="question_id2[]"><span>Met de h1 tag</span>
   <br>
   <input type="radio" name="question_id2[]" id="antw2"><span>Met de title tag</span>
   <br>
   <input type="radio" name="question_id2[]"><span>zonder niks</span>
</div>
   <br>
<div class="" id="vraag3">
   <p class=""></p><span class="note">Vraag: 3</span></p>
   <input type="hidden" name="question_id3[]">Waar in moet je je titel typen?
   <br>
   <input type="radio" name="question_id3[]"><span>body</span>
   <br>
   <input type="radio" name="question_id3[]" id="antw3"><span>head</span>
   <br>
   <input type="radio" name="question_id3[]"><span>css</span>
</div>
   <br>
<div class="" id="vraag4">
   <p class=""></p><span class="note">Vraag: 4</span></p>
   <input type="hidden" name="question_id4[]">Is HTML een programmeertaal?
   <br>
   <input type="radio" name="question_id4[]"><span>Ja</span>
   <br>
   <input type="radio" name="question_id4[]" id="antw4"><span>Nee</span>
</div>
   <br>
<div class="" id="vraag5">
   <p class=""></p><span class="note">Vraag: 5</span></p>
   <input type="hidden" name="question_id5[]">Wat is de voledige naam van HTML?
   <br>
   <input type="radio" name="question_id5[]"><span>Hotel Techniek Middelbaar Lobby</span>
   <br>
   <input type="radio" name="question_id5[]" id="antw5"><span>Hypertext Markup Language</span>
   <br>
   <input type="radio" name="question_id5[]"><span>Hogeschool Taal Management Leiden</span>
</div>
   <br>
<div class="" id="vraag6">
   <p class=""></p><span class="note" style="color: rgb(250, 74, 4);">Vraag: 6</span></p>
   <input type="hidden" name="question_id6[]">Wat doet echo?
   <br>
   <input type="radio" name="question_id6[]"><span>Gegevens delen met andere</span>
   <br>
   <input type="radio" name="question_id6[]"><span>Gegevens verwijderen van het scherm</span>
   <br>
   <input type="radio" name="question_id6[]" id="antw6"><span>Gegevens naar het scherm sturen</span>
</div>
   <br>
<div class="" id="vraag7">
   <p class=""></p><span class="note" style="color: rgb(250, 74, 4);">Vraag: 7</span></p>
   <input type="hidden" name="question_id7[]">Voor wat wordt CSS gebruikt?
   <br>
   <input type="radio" name="question_id7[]"><span>Front-end</span>
   <br>
   <input type="radio" name="question_id7[]" id="antw7"><span>Style</span>
   <br>
   <input type="radio" name="question_id7[]"><span>Ontwerp van de website</span>
</div>
   <br>
<div class="" id="vraag8">
   <p class=""></p><span class="note" style="color: rgb(250, 74, 4);">Vraag: 8</span></p>
   <input type="hidden" name="question_id8[]">Wat is een if en else statement?
   <br>
   <input type="radio" name="question_id8[]" id="antw8"><span>Als een conditie waar is, wordt er een code uitgevoerd, anders gebeurt er iets anders</span>
   <br>
   <input type="radio" name="question_id8[]"><span>Twee zelfde uitkomsten</span>
   <br>
   <input type="radio" name="question_id8[]"><span>Dilemma</span>
</div>
   <br>
<div class="" id="vraag9">
   <p class=""></p><span class="note" style="color: rgb(250, 74, 4);">Vraag: 9</span></p>
   <input type="hidden" name="question_id9[]">Via welk programmeertaal krijg je de scripttaal van javascript als het wordt ingeladen?
   <br>
   <input type="radio" name="question_id9[]" id="antw9"><span>HTML</span>
   <br>
   <input type="radio" name="question_id9[]"><span>PHP</span>
   <br>
   <input type="radio" name="question_id9[]"><span>JAVASCRIPT</span>
</div>
   <br>
<div class="" id="vraag10">
   <p class=""></p><span class="note" style="color: rgb(250, 74, 4);">Vraag: 10</span></p>
   <input type="hidden" name="question_id10[]">Kan je javascript code type in een html bestand?
   <br>
   <input type="radio" name="question_id10[]" id="antw10"><span>Ja dat kan</span>
   <br>
   <input type="radio" name="question_id10[]"><span>Nee dat kan niet</span>
</div>
   <br>
<div class="" id="vraag11">
   <p class=""></p><span class="note" style="color: rgb(250, 74, 4);">Vraag: 11</span></p>
   <input type="hidden" name="question_id11[]">Hoe moet je beginnen met het type van javascript code in een HTML bestand?
   <br>
   <input type="radio" name="question_id11[]"><span>script -> script</span>
   <br>
   <input type="radio" name="question_id11[]" id="antw11"><span>script -> /script</span>
   <br>
   <input type="radio" name="question_id11[]"><span>gelijk type met het type van de code</span>
</div>
   <br>
<div class="" id="vraag12">
   <p class=""></p><span class="note" style="color: rgb(250, 74, 4);">Vraag: 12</span></p>
   <input type="hidden" name="question_id12[]">Hoe laad je een afbeelding in html?
   <br>
   <input type="radio" name="question_id12[]" id="antw12"><span> img src="foto.jpg" </span>
   <br>
   <input type="radio" name="question_id12[]"><span>src=foto.jpg</span>
   <br>
   <input type="radio" name="question_id12[]"><span>img source="foto.png"</span>
</div>
   <br>
   <br>
<button onclick= check() id="button1" style="background-color: rgb(250, 74, 4);">Quiz inleveren</button>

<script type="text/javascript" src="spel_1.js">

</script>
<br>
<br>
<h1><a href="https://nl.wikipedia.org/wiki/Lijst_van_programmeertalen" class="informatie" title="Verschillende programmeertalen informatie" style="color: rgb(250, 74, 4);">Wilt u meer informatie hebben over verschillende programmeertalen? Klik dan hierop!</a></h1></>     

</label>


</body>
</html>
<?php
}
?>

