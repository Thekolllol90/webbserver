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
    <link rel="stylesheet" href="Info.css">
</head>
<body>
    <?php
    include("Menu.php");
    ?>
      <div id="rub">ABOUT US!!</div>
       <div id="text">
           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni iusto inventore temporibus debitis et. Officiis laboriosam dolores rerum itaque voluptatum labore, distinctio, tenetur ea pariatur. Aspernatur dolorum voluptates, excepturi recusandae praesentium, rerum delectus, eum atque nihil amet laborum corrupti architecto debitis porro nam harum at hic ea voluptate? Et fugiat, cum minus quis ducimus mollitia harum rerum dolore enim aliquam dolorum, ut in veniam impedit suscipit sapiente pariatur similique perferendis, odio architecto eligendi! Est vitae repudiandae deserunt ipsa nostrum quis, sapiente suscipit tempora accusamus voluptatem velit, assumenda. Doloremque repellendus pariatur doloribus, impedit, labore quae eius quos itaque, recusandae harum quia fugiat omnis excepturi nulla unde sint dolor molestias necessitatibus, dolores deserunt minus. Ea animi tempore qui illo, nobis dignissimos aliquam tempora accusantium beatae. Optio numquam, minus itaque eaque vitae amet voluptatibus, provident nostrum et eveniet quas nihil qui fugiat! Voluptatibus, consequuntur accusamus debitis nihil ipsa aliquam nesciunt dolor eveniet tempore!
       </div>
        <?php
    include("Footer.php");
    ?>
</body>
</html>