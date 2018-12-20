
<style>
    <?php
    if($_SESSION["light"]){
    ?>
<link rel="stylesheet" href="Menu.css">
    <?php
    }else{
        ?>
<link rel="stylesheet" href="Menu_dark.css">
    <?php
    }
        ?>
</style>
      <div id="top">
    <div id="menu">
        <a href="Home.php">Home</a>
        <a href="Info.php">Info</a>
        <a href="Planets.php">Planets</a>
        <a href="Profile.php">Profile</a>
       </div>
       <div id="boi">
         Username:
          <?php
           $wow = $_SESSION["user"]["username"];
           
           echo $wow;
           
           ?> 
       </div>
    </div>
