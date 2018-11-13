<?php

if(isset($_POST['name']) && isset($_POST['mail']) && isset($_POST['password']) && ($_POST['username'])){
    
    $dbc_form = mysqli_connect("localhost","root","","kill_me");
    
    $name = $_POST['name'];
    $username = $_POST['username'];
    $pass = $_POST['password'];
    $mail = $_POST['mail'];
    
    $query = "insert into user (username,name,password,mail) VALUES ('$username','$name','$pass','$mail')";
    
    mysqli_query($dbc_form,$query);
}

session_start();

if(isset($_SESSION['login'])){
    if($_SESSION['login'] == true){
        header("location: index.php");
    }
}
else{
    $_SESSION['login'] = false;
}

if(isset($_POST['username']) && isset($_POST['password'])){
    
    $dbc_form = mysqli_connet("localhost","root","","kill_me");
    
    $username = $_POST['username'];
    $pass = $_POST['password'];
    
    $query = "select * from user WHERE username='$username' AND password='$pass'";
    
    $result = mysqli_query($dbc_form,$query);
}
header("location: index.php")
?>