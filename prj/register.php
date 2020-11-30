<?php
    session_start();
    $host = "localhost";
    $username = "root";
    $user_pass = "";
    $database_in_use = "isp";
    
    $mysqli = new mysqli($host, $username, $user_pass, $database_in_use);
    
    if(isset($_POST['register'])){
        $username = $_POST['username'];
        $userpass = $_POST['password'];
        $confpass = $_POST['confpass'];
        $email = $_POST['email'];
        if(($userpass != $confpass) or empty($username) or empty($userpass)){
            print_r("There was a problem with the information you gave us, make sure to fill the form and that your passwords match");
        }
        else{
            $sql = "SELECT * FROM users WHERE username = '$username'";
            $result = $mysqli->query($sql);
            if($result->num_rows > 0){
                print_r("A user with this name already exists, pick a different name");
            }else{
                $sql = "INSERT INTO users (user_id,username,userpass,email,userfav) VALUES(NULL,'$username','$userpass','$email','')";
                $result = $mysqli->query($sql);
                $_SESSION['username'] = $username;
                $_SESSION['success'] = "You are now logged in";
                header('location: index.php');
            }
            
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <style>
    
    body
	{
	background: #2b5876; /* fallback for old browsers */
	background: -webkit-linear-gradient(to right, #2b5876, #4e5376); /* For Chrome 10-25, Safari 5.1-6 */
	background: linear-gradient(to right, #2b5876, #4e5376);
	}

	#form
	{
	width: 30%;
	margin: 25px auto;
	}
    </style>
</head>
<body>

<div class="container">
		<div class="row">
	    <div id="form">
				<h1 style="text-align: center;">Register an account</h1>
			<form action = "register.php" method = "POST">
			
				<div class="form-group">
		      <label>Create a Username</label>
		      <input type="text" name="username" class="form-control" placeholder="Username">
				</div>

				<div class = "form-group">
					<label>Email address</label>
					<input type="email" name = "email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="user123@resmatch.com">
					<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
				</div>
				<div class = "form-group">
					<label>Password</label>
					<input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="This is a secret">
				</div>
				<div class = "form-group">
					<label>Confirm Password</label>
					<input type="password" name="confpass" class="form-control" id="exampleInputPassword1" placeholder="This is a secret">
				</div>
				<div class = "form-group">
					<button type = "submit" name = "register" class = "btn btn-lg btn-default btn-danger btn-block"> Register </button>
				</div>
			</form>
			<p>
				Already have an account? <a href="login.php"><button class="btn btn-sm btn-default btn-primary">Login!</button></a>
			</p>
		</div>
		</div>
	</div>
</body>
</html>

