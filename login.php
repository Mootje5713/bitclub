<?php
session_start();
$host = 'localhost';
$db   = 'bitclub';
$user = 'bitclub';
$pass = 'GERK@rouh-crir5zur';
$charset = 'utf8mb4';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<link rel="stylesheet" href="registratie.css">
    <title>BitClub | Login</title>
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">  
	
</head>
<body>
  
    <?php
include 'navbar.php';
date_default_timezone_set('Europe/Amsterdam');
  
navbarr();
	$connect = new PDO("mysql:host=$host;dbname=$db;charset=$charset", $user, $pass);
	$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
    if (isset($_POST['username'])) {
			 $query = "SELECT * FROM gebruikers WHERE username = :username AND wachtwoord = :wachtwoord";
			 $statement = $connect->prepare($query);
			 $statement->bindParam(':username', $_POST['username']);
			 $statement->bindParam(':wachtwoord', $_POST['wachtwoord']);
			 $statement->execute(
			 );
			 $count = $statement->rowCount();
		    if ($count > 0) { 
				if (isset($_POST['remember'])) {
					setcookie('username',$_POST['username'],time()+30);
					setcookie('wachtwoord',$_POST['wachtwoord'],time()+30);
				} else {
					setcookie('username',$_POST['username'],30);
					setcookie('wachtwoord',$_POST['wachtwoord'],30);
				}
							$_SESSION["username"] = $_POST["username"];
                            echo "<script>history.go(-2);</script>";		
			} else { 
				 echo "<script>
				 alert('Gebruikers/wachtwoord onjuist');
			   </script>";
			}
	}
	$username_cookie = "";
	$wachtwoord_cookie = "";
	$set_remember = "";
	if (isset($_COOKIE['username']) && isset($_COOKIE['wachtwoord'])) {
		$username_cookie = $_COOKIE['username'];
		$wachtwoord_cookie = $_COOKIE['wachtwoord'];
		$set_remember="checked='checked'";
	}

			echo '<br><div class="wrapper">
			<div class="title">
			 Login</div>
	  <form action="" method="POST">
			  <div class="field">
				<input type="text" name="username" value="'.$username_cookie.'" required>
				<label>Gebruikersnaam</label>
			  </div>
	  <div class="field">
				<input type="password" name="wachtwoord" id="password" value="'.$wachtwoord_cookie.'" required>
				<label>Password</label>
				
			  </div>
	  <div class="field">
				<input type="submit" value="Login">
			  </div>
	  <div class="signup-link"><a href="registratie.php">Registreer</a></div>
	  </form>
	  </div>
	  <img src="hiring.png" id="sidepic"';
?>

</body>
</html>