<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>login</title>
    <style>
        *{
            margin: 0px;
            padding: 0px;
            background-color: darkgray;
        }
        #container{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        #box{
            width: 500px;
            height: 500px;
            background-color:rgba(139,0,0,0.5);
            margin-top: 100px;
            text-align: center;
        }
        #pic{
            margin-top: 60px;
        }
        #box > a{
            text-decoration: none;
        }
        .button{
            width: 400px;
            height: 100px;
            margin: auto;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: darkred;
        }
        .button > p{ 
            font-size: 40px;
            background-color: darkred;
            color: black;
            font-weight: 800;
        }
        #box1{
            margin-top: 40px;
        }
        #box2{
            margin-top: 40px;
        }
    </style>
</head>
<body>
   <div id="container">
    <div id="box">
        <img src="pic.jpg" height="80px" id="pic">
        <a href="Loggin.php"><div class="button" id="box1"><p>Login</p></div></a>
        <a href="Register.php"><div class="button" id="box2"><p>Register</p></div></a>
    </div>
   </div>
</body>
</html>