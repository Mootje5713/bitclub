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
    <link rel="stylesheet" type="text/css" href="styleco2.css">
    <meta http-equiv = "refresh" content = "3; url = ./contact.php" />
</head>

<body>

<h1 id="short">Uw bericht is verstuurd!</h1>
    <p id="short1">Uw krijgt zo snel mogelijk reactie.</p>
    <h2 id="short2">U keert nu terug naar de Home Pagina.</h2>

</body>


<?php
    if (isset($_POST['submit'])) {
      $naam = $_POST['firstname'];
      $email = $_POST['email'];
      $bericht = $_POST['message'];
      $sql = "INSERT INTO `contactgegevens` (Naam, Email, Bericht) 
      VALUES (:Naam, :Email, :Bericht)";
      $stmt = $connect->prepare($sql);
      $exe = $stmt->execute(array(":Naam" => $naam, ":Email" => $email, ":Bericht" => $bericht));
    }
?>

</html>