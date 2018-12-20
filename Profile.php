<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
include("db.php");
    if(isset($_SESSION["user"]) && ($_SESSION["user"] == false)){
        header("location: Login.php");
        exit;
    }
?>
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="Menu.css">
    <link rel="stylesheet" href="Profile.css">
</head>
<body>
    <?php
    include("Menu.php");
    include("db.php");
    ?>
        <?php
        $query = "SELECT * FROM user";
        $result = mysqli_query($dbc,$query);
        while($row = mysqli_fetch_assoc($result)){
            $uname = $row['username'];
            $age = $row['age'];
            $email = $row['email'];
        }
            ?>
    <div id="container">
        <div>
           <a href="https://www.google.com/">
            <img src="Sk%C3%A4rmklipp%20neo%202.PNG" width="400px" id="pic">
            </a>
        </div>
        <div id="logout">
           <a href="logout.php">
               LOGOUT!
           </a>
        </div>    
            <div class="skr">
                <div class="uname">You'r username is: <?php echo $uname; ?></div>
                <div class="email">You'r connected email is: <?php echo $email; ?></div>
                <div class="age">You'r age is: <?php echo $age; ?></div>
            </div>
        <a href="Password.php"><div>Change password</div></a>
    </div>
</body>
</html>