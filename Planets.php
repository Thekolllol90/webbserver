<!DOCTYPE html>
<?php
session_start();
include("db.php");
    if(isset($_SESSION["user"]) && ($_SESSION["user"] == false)){
        header("location: Login.php");
        exit;
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="Menu.css">
    <link rel="stylesheet" href="Planets.css">
</head>
<body>
    <?php
    include("Menu.php");
    ?>
        <?php
        $query = "SELECT * FROM planet";
        $result = mysqli_query($dbc,$query);
        while($row = mysqli_fetch_assoc($result)){
            $pname = $row['planetname'];
            $orb = $row['orbittime'];
            $grav = $row['gravity'];
            $dis = $row['distance'];
            $moons = $row['moons'];
            $mass = $row['mass'];
            ?>
            <div class="skr">
                <div class="name">Planet name: <?php echo $pname; ?></div>
                <div class="gravity">Planet gravity: <?php echo $grav; ?></div>
                <div class="distance">Distance from the sun: <?php echo $dis; ?></div>
                <div class="mass">Planets mass: <?php echo $mass; ?></div>
                <div class="moons">Number of moons: <?php echo $moons; ?></div>
                <div class="orbittime">Number of days it takes to orbit the sun: <?php  echo $orb; ?> </div>
                <br>
            </div>
            <?php
        }
        ?>
            <?php
    include("Footer.php");
    ?>
</body>
</html>