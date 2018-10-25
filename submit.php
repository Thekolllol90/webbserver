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

header("location: index.php");

?>