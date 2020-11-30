<?php

    session_start();
    
    if(!isset($_SESSION['index'])){
        $_SESSION['index'] = 0;
    }
    $i=$_SESSION['index'];
    if(isset($_SESSION['username'])){
        $un = $_SESSION['username'];
         
    }
    require_once('component.php');

    if(isset($_POST['add'])){
        $id = ($_POST['img_id']);
        
        
        $sql = "SELECT * FROM users WHERE username = '$un' AND userfav LIKE '%,$id,%'";
        $result = $mysqli->query($sql);
        if($result->num_rows > 0){
            echo '<script>alert("You already added this")</script>';
            echo '<script>window.location = "index.php"</script>';
        }else{
            $sql = "UPDATE users SET userfav = CONCAT(userfav, ',$id,') WHERE username = '$un'";
            $result = $mysqli->query($sql);
            
        }
        
    }
    if(isset($_POST['next'])){
        if($_SESSION['index'] == $_SESSION['count']-1){
            $_SESSION['index'] = 0;
        }else{
            $_SESSION['index']++;
        }
        
        $i = $_SESSION['index'];
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping cart</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- W3 animations -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <link rel="stylesheet" href="style.css">
    <style>
        .slides{
            
            margin-left: auto;
            margin-right: auto;
            margin-top: 50px;
        }
        .images{
            width:300px;
            height:auto;
        }
    </style>
</head>
<body>
    
    <?php require_once("header.php");?>

    <div class="container">
        <div class="row text-center py-5">
            <?php
                $sql = "SELECT * FROM recipeinfo";
                $result = $mysqli->query($sql);
                $imgArr = array();
                
                while($row = $result->fetch_assoc()){
                    array_push($imgArr,$row['recipe_id']);
                    
                }
                $_SESSION['count'] = count($imgArr);
                
                $sql = "SELECT * FROM recipeinfo WHERE recipe_id = '$imgArr[$i]'";
                $result = $mysqli->query($sql);
                while($row = $result->fetch_assoc()){
                    
                    component($row['recipe_title'],$row['recipe_description'],$row['recipe_ingredients'],$row['img_url'],$row['recipe_id']);
                }
                
                
            ?>
            
        </div>
        
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    
</body>
</html>