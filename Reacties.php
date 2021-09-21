<?php 
include "dbhA.php";
include "navbar.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="reviewpagina.css">
    <link rel="icon" href="favicon.ico">
	<title>BitClub | Reacties</title>
    
</head>


<body>

<?php
if (isset($_SESSION['username'])) {
    loggednavbar($connect);
    ?>
    <br>
<br>
<br>
<br>
<br>

<center> 
<a href="reviewpagina.php"><button id="rvb">Schrijf een review!</button></a>
    <table align="center">  
<?php

    $SQL = "SELECT * FROM review";
    $result = $connect->query($SQL);
    $result->execute();

    while ($row = $result->fetch()) {
        echo '<br><div class="rond"><br>', '<span style="color:white;">'.$row['reactie']. '</span>', '<br></div><br>';
    }

?>
    </table>
</center>
</body>
</html>

<?php
} else {
    navbarr();

?>
<br>
<br>
<br>
<br>
<br>

<center> 
<button type="button" id="rvb2" data-toggle="modal" data-target="#myModal">Schrijf een review!</button>
    <table align="center">  
<?php

    $SQL = "SELECT * FROM review";
    $result = $connect->query($SQL);
    $result->execute();

    while ($row = $result->fetch()) {
        echo '<br><div class="rond"><br>', '<span style="color:white;">'.$row['reactie']. '</span>', '<br></div><br>';
    }

    ?>
    </table>
    <div class="container">




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
 
</center>
</body>
</html>
<?php
}
?>