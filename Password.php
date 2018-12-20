<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
include("db.php");
    $wow = $_SESSION["user"]["username"];
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
<body>
       <?php
    include("Menu.php");
    include("db.php");
    ?>
    <form method="post" action="">
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
<?php
 if(isset($_POST['pas']) && isset($_POST['newpas']) && isset($_POST['confirmpas'])){
     $pas = $_POST['pas'];
     $npas = $_POST['newpas'];
     $cpas = $_POST['confirmpas'];
     
     $query = "SELECT password FROM user WHERE password = '$pas'";
     
     $row = mysqli_fetch_assoc(mysqli_query($dbc,$query));
     if($row["password"] == $_POST['pas']){
     if($_POST['newpas'] == $_POST['confirmpas']){
         
        $query = "UPDATE user SET password = '$npas' WHERE username = '$wow'"; 
         
        mysqli_query($dbc,$query);
         
     }else{
        header("location: Password.php?error=opps_some_password_was_wrong");
     }
     }else{
        header("location: Password.php?error=opps_some_password_was_wrong");
     }
     header("location: home.php");
 }
     ?>
</html>