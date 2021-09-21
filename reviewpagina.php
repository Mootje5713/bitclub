<?php
include "dbhA.php";
include "navbarintro.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="reviewpagina.css">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BitClub | Reviews</title>
    <link rel="icon" href="favicon.ico">
    <script src="//cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
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
<h1>Mocht je nog een reactie hebben laat het het dan achter</h1>

<div id= review>
    <form method="POST" action="reviewpagina.php">
    <textarea id="commenst" rows="10" name="reactie"></textarea>
    <script>
    CKEDITOR.replace( 'commenst' );
    </script>
    <br><br>
        <input type="submit" id="submit" name="submit" value="Verstuur">
        </form>
    </form>
    </div>
    <input type="image" id="image" src="opmerking.png" alt="image" onclick="Reacties.php'">
    <?php
    if (isset($_POST['submit'])) {
        $connect->beginTransaction();
        $reactie = $_POST['reactie'];
        $sql = "INSERT INTO `review` (reactie) 
        VALUES (:reactie)";
        $stmt = $connect->prepare($sql);
        $exe = $stmt->execute(array(":reactie" => $reactie));
        $connect->commit();
        header('location: Reacties.php');
      } 
    ?>
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
<h1>Mocht je nog een reactie hebben laat het het dan achter</h1>

<div id= review>
    <form method="POST" action="reviewpagina.php">
    <textarea id="commenst" rows="10" name="reactie"></textarea>
    <script>
    CKEDITOR.replace( 'commenst' );
    </script>
    <br><br>
        <input type="submit" id="submit" name="submit" value="Verstuur">
        </form>
    </form>
    </div>
    <input type="image" id="image" src="opmerking.png" alt="image" onclick="window.location.href='Reacties.php'">
    <?php
    if (isset($_POST['submit'])) {
        $connect->beginTransaction();
        $reactie = $_POST['reactie'];
        $sql = "INSERT INTO `review` (reactie) 
        VALUES (:reactie)";
        $stmt = $connect->prepare($sql);
        $exe = $stmt->execute(array(":reactie" => $reactie));
        $connect->commit();
        header('location: Reacties.php');
      } 
    ?>
</body>
</html>
<?php
}
?>


