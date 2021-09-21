<?php
include 'dbhA.php';
include 'navbar.php';
session_start();
navbarr()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<link rel="stylesheet" href="registratie.css">
    <title>Document</title>
	
</head>
<body>
 <?php   
if (isset($_POST['aanmelden'])) {
  $naam = $_POST['Naam'];
  $achternaam = $_POST['Achternaam'];
  $email = $_POST['email'];
  $user = $_POST['username'];
  $wachtwoord = $_POST['wachtwoord']; 
  $sql = "SELECT COUNT(username) AS num FROM gebruikers WHERE username = :username";
  $stmt = $connect->prepare($sql);
  $stmt->bindValue(':username', $user);
  $stmt->execute();
  $row = $stmt->fetch(PDO::FETCH_ASSOC);

  $sql1 = "SELECT COUNT(Email) AS num FROM gebruikers WHERE Email = :Email";
  $stmt1 = $connect->prepare($sql1);
  $stmt1->bindValue(':Email', $email);
  $stmt1->execute();
  $row1 = $stmt1->fetch(PDO::FETCH_ASSOC);
  
  if($row['num'] > 0){
    echo '<script>alert("Gebruikersnaam bestaat all")</script>';
  } elseif ($row1['num'] > 0) {  
    echo '<script>alert("Email bestaat all")</script>';
  } else {
    $sql = "INSERT INTO `gebruikers` (`Naam`, `Achternaam`, `Email`, `username`, `wachtwoord`) 
    VALUES (:Naam, :Achternaam, :Email, :username, :wachtwoord) ";
    $sql_run = $connect->prepare($sql);
    $result = $sql_run->execute(array(":Naam" => $naam, ":Achternaam" => $achternaam, ":Email" => $email,
    ":username" => $user, ":wachtwoord" => $wachtwoord)); 
   header('Location: login.php');

}
}


echo '<br><div class="wrapper">
<div class="title">
 Registreer</div>
<form action="" method="POST">
<div class="field">
    <input type="text" name="Naam" pattern="[a-zA-Z]{3,12}" required>
    <label>Naam</label>
  </div>
  <div class="field">
    <input type="text" name="Achternaam" required>
    <label>Achternaam</label>
  </div>
  <div class="field">
    <input type="email" name="email">

    <label>Email</label>
  </div>
  <div class="field">
    <input type="text" name="username"  title="Minstens 3 letters max 12"  required>
    <label>Gebruikersnaam</label>
  </div>
<div class="field">
    <input type="password" name="wachtwoord" pattern=".{8,}" title="Minstens 8 letters" required>
    <label>Password</label>
  </div>
<div class="content">
<div class="field"><br>
    <input type="submit" name="aanmelden" value="Aanmelden">
  </div>
</form>
</div>
<img src="hiring.png" id="sidepic"';

?>
</body>
</html>