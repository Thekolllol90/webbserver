<!DOCTYPE html>
<?php
include("db.php");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>register</title>
    <link href="css.css" rel="stylesheet">
</head>
<body>
   <div id="container">
    <div id="box">
        <img src="pic.jpg" height="80px" id="pic">
        <form method="post" action="" id="form2">
        <div class="text" id="box1">
           <p>Username: </p>
            <input type="text2" name="uname" required>
        </div>
        <div class="text2" id="box2">
            <p>Fullname: </p>
            <input type="text" name="name" required>
        </div>
        <div class="text2" id="box3" >
            <p>Age: </p>
            <input type="number" min="0" max="120" name="age" required>
        </div>
        <div class="text2" id="box4">
            <p>Password: </p>
            <input type="password" name="pas" required>     
        </div>
        <div class="text2" id="box5">
            <p>Email: </p>
            <input type="email" name="mail" required>
        </div>
        <div class="text2" id="box6">
            <input type="submit" name="sub" value="Submit">
        </div>
        </form>
       </div>
    </div>
</body>
</html>