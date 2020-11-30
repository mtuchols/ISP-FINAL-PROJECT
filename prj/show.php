<?php

    session_start();
    if(isset($_SESSION['username'])){
        $un = $_SESSION['username'];
        
    }
    require_once("component.php");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
    <link rel="stylesheet" href="style.css">
    <style>
    .slides{
            
            text-align: center;
            margin-top: 50px;
        }
    </style>

</head>
<body>
<?php
        require_once('header.php');
        $show = $_GET['id'];
        $sql = "SELECT * FROM recipeinfo WHERE recipe_id = $show";
        $result = $mysqli->query($sql);
        while($row = $result->fetch_assoc()){
            echo '
            <div class="slides">
                <form action="show.php" method="post">
                    
                    <img class="images" src="'.$row['img_url'].'" alt="" style="height:250px;">
                    <h5>'.$row['recipe_title'].'</h5>
                    <h3>'.$row['recipe_ingredients'].'</h3>
                    <p>'.$row['recipe_description'].'</p>
                    
                </form>
                
            </div>';
        }

        
    ?>
</body>
</html>