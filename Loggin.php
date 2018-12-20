<?php   
session_start();

include("Loggin_mall.php");
include("db.php");
    if(isset($_SESSION["user"])){
        header("location: Home.php");
        exit;
    }
    if(isset($_POST['mail']) && isset($_POST['pas'])){
        $mail = $_POST['mail'];
        $pas = $_POST['pas'];
        
        $query = "SELECT * FROM user WHERE email = '$mail' AND password = '$pas'";
        
        $result = mysqli_query($dbc,$query);
        if(mysqli_num_rows($result) > 0){
            $user = mysqli_fetch_assoc($result);
            $_SESSION["user"] = $user;
            header("Location: Home.php");
            exit();
        }else{
        echo "Wopps something went wrong mabye wrong password?";
        }
        }
    ?>  
