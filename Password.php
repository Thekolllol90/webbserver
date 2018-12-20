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
    <title>password</title>
    <link rel="stylesheet" href="Menu.css">
    <link rel="stylesheet" href="Password.css">
</head>
<?php
 if(isset($_POST['pas']) && isset($_POST['newpas']) && isset($_POST['confirmpas'])){
     $pas = $_POST['pas'];
     $npas = $_POST['newpas'];
     $cpas = $_POST['conformpas'];
     
     $query = "SELECT password FROM user WHERE password = '$pas'";
     
     mysqli_query($dbc,$query);
     
     if($npas = $cpas){
         
        $query = 
         
         mysqli_query($dbc,$query);
            
        header("location: Profile.php"); 
     }else{
        header("location: Password.php?error=opps_some_password_was_wrong");
     }
     
 }
     ?>
<body>
       <?php
    include("Menu.php");
    include("db.php");
    ?>
    <form action="post">
    <div id="con">
    <p>Password:</p>
    <input type="text" name="pas">
    <p>New password:</p>
    <input type="password" name="newpas">
    <p>Confirm password:</p>
    <input type="password" name="confirmpas">
    <br>
    <br>
    <input type="submit" value="Confirm">
    </div>
    </form>
</body>
</html>