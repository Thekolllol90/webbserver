<!DOCTYPE html>
<?php
include("db.php");
include("Register_mall.php");

        if(isset($_POST['uname']) && isset($_POST['name']) && isset($_POST['age']) && isset($_POST['pas']) && isset($_POST['mail'])){
            
            $uname = $_POST['uname'];
            $name = $_POST['name'];
            $age = $_POST['age'];
            $pas = $_POST['pas'];
            $mail = $_POST['mail'];
            
            $query = "SELECT * FROM user WHERE username = '$uname' OR email = '$mail'";
            
            $result = mysqli_query($dbc,$query);
            
            if(mysqli_num_rows($result) > 0){
                header("location: Register.php?error=finns_redan");
            }else {
                $query = "INSERT INTO user (username,fullname,age,password,email) VALUES ('$uname','$name','$age','$pas','$mail')";
            
                mysqli_query($dbc,$query);
            
                header("location: Loggin.php");
            }
        }
        ?>
