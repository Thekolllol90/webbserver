<!docktype html>
<html>
    <head>
        <meta charset="utf-8">
        <style>
            form{
                background-color: red;
                padding: 20px;
                width: 300px;
            }    
        </style>
    </head>
    <body>
        <form action="submit.php" method="post">
            Username:<br> <input type="text" name="username"><br>
            Name:<br> <input type="text" name="name"><br>
            Password:<br> <input type="password" name="password"><br>
            Email:<br> <input type="email" name="mail"><br><br>
            <input type="submit" name="submit" value="registrera"><br>
        </form>   
        
             
        <form action="submit.php" method="post">
            Username:<br> <input type="text" name="username"><br>
            Password:<br> <input type="password" name="password"><br><br>
            <input type="submit" name="submit" value="logga in"><br>
            
        </form>     
    </body>
</html>


