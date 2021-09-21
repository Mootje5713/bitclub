<?php

$host = 'localhost';
$db   = 'bitclub';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

try {
     $connect = new PDO("mysql:host=$host;dbname=$db;charset=$charset", $user, $pass);
     $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
     echo "DB Connection failed" . $e->getMessage();
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
</body>
</html>