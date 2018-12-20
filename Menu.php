   <div id="top">
    <div id="menu">
        <a href="Home.php">Home</a>
        <a href="Info.php">Info</a>
        <a href="Planets.php">Planets</a>
        <a href="Profile.php">Profile</a>
       </div>
       <div id="boi">
          <?php
           $wow = $_SESSION["user"]["username"];
           
           echo $wow;
           
           ?> 
       </div>
    </div>
