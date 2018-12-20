<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include("db.php");
if(!isset($_SESSION["user"])){
    header("location: Login.php");
    exit;
}
?>
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="Menu.css">
    <link rel="stylesheet" href="Home.css">
</head>
<body>
    <?php
    include("Menu.php");
    ?>
    <div id="rub">WELCOME!!</div>
    <div id="con">choose a option
    <div id="op">
        <a href="Planets.php">Planets</a>
        <a href="Profile.php">Profile</a>
        <a href="Info.php">Info</a>
       </div>
    </div>
    <?php
    include("Footer.php");
    ?>
</body>
</html>