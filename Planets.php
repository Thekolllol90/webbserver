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
      
    <div id="sort">
      <form method="GET" action="">
       <input type="submit" name="order" value="orbittime">
       <input type="submit" name="order" value="moons">
       <input type="submit" name="order" value="planetname">
      </form>
    </div>
        <?php
        $order = "";
        if(isset($_GET['order'])){
                $order = "ORDER BY " . $_GET['order'] . " DESC";
                $_SESSION['order'] = $_GET['order'];
        }
        
        $query = "SELECT * FROM planet $order";
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
           <div id="boi"></div>
</body>
</html>