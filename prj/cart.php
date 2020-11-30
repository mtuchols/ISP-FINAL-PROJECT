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
    <title>Cart</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
    <link rel="stylesheet" href="style.css">
    
</head>
<body class="bg-light">
    

    <?php
        require_once('header.php');

        if(isset($_POST['remove'])){
            if($_GET['action']=='remove'){
                
                
                $id = $_GET['id'];
                
                $sql = "UPDATE users SET userfav = REPLACE(userfav, ',$id,','') WHERE username = '$un'" ;
                $result = $mysqli->query($sql);
            }
        }
    ?>

    <div class="container-fluid">
        <div class="row px-5">
            <div class="col-md-7">
                <div class="shopping-cart">
                    <h6>My Favorites</h6>
                    <hr>
                    <div class="container">
                        <div class="row text-center py-5">
                    <?php
                        $sql = "SELECT * FROM users WHERE username = '$un'";
                        $result = $mysqli->query($sql);
                        if($result->num_rows > 0){
                            while($row = $result->fetch_assoc()){
                                $idstring = $row['userfav'];
                                $idarray = array();
                                $idarray = explode(',',$idstring);
                                
                            }
                            $sql = "SELECT * FROM recipeinfo";
                            $result = $mysqli->query($sql);
                            $i = 0;
                            while($row = $result->fetch_assoc()){
                                foreach($idarray as $num){
                                    if($row['recipe_id'] ==$num){
                                        $i++;
                                        cartElement($row['img_url'],$row['recipe_title'],$row['recipe_id']);
                                    }
                                }
                            }
                            if($i ==0){
                                echo '<h5>You have no favorites!</h5>';
                            }
                        }
                        

                    ?>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    
</body>
</html>