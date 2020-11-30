<?php


$host = "localhost";
$username = "root";
$user_pass = "";
$database_in_use = "isp";

$mysqli = new mysqli($host, $username, $user_pass, $database_in_use);

if($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
 }

function component($name,$desc,$ingredients,$productimg,$img_id){
    $element = '
    <div class="slides w3-animate-right">
        <form action="index.php" method="post">
            <img class="images" src="'.$productimg.'" alt="">
            <h5>'.$name.'</h5>
            <h3>'.$ingredients.'</h3>
            <hr>
            <p>'.$desc.'</p>
            <button id="add" type="submit" class="btn btn-primary my-3" name="add">Add to Favorites <i class="fas fa-star"></i></button>
            <input type="hidden" name="img_id" value="'.$img_id.'">
            <button id="next" name="next" type="submit" class="btn btn-primary my-3">Next <i class="fas fa-arrow-right"></i></button>
            <input type="hidden" name="img_id" value="'.$img_id.'">
        </form>
        
    </div>
    '
    
    ;
    echo  $element;
}

//get info from dtabase
function getData(){
    $sql = "SELECT * FROM recipeinfo";
    $result = $mysqli->query($sql);

    if($result->num_rows > 0){
        return $result;
    }
}

function cartElement($img,$name,$id){
    $element = '
    
        <div class="col-md-3 col-sm-6 my-3 my-md-2">
        <form action="cart.php?action=remove&id='.$id.'" method="post" class="cart-items">
            <div class="card shadow">
                <div align="center">
                <a href="show.php?id='.$id.'">
                <img class="images" src="'.$img.'" alt=""  ">
                </a>
                <h5>'.$name.'</h5>
                <button type="submit" class="btn btn-danger mx-2" name="remove">Remove</button>
                </div>
            </div>
        </form>
        </div>
    
    '
 
    ;
    echo $element;
}