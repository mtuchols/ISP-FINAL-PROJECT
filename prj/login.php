<?php
    session_start();
    $host = "localhost";
    $username = "root";
    $user_pass = "";
    $database_in_use = "isp";
    
    $mysqli = new mysqli($host, $username, $user_pass, $database_in_use);
    
    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $userpass = $_POST['password'];
        if(empty($username) or empty($userpass)){
            print_r("Enter your information below");
        }
        else{
            $sql = "SELECT * FROM users WHERE username = '$username' AND userpass = '$userpass'";
            $result = $mysqli->query($sql);
            if($result->num_rows > 0){
                $_SESSION['username'] = $username;
                $_SESSION['success'] = "You are now logged in";
                header('location: index.php');
            }
            else{
                print_r("No profiles match this information, please try again or create a new profile");
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
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
			<h1 style="text-align: center;">Login</h1>
			<form action="login.php" method="POST">
				
				<div class="form-group">
					<label>Username</label>
					<input class="form-control"type="text" name="username" placeholder="Username">
				</div>
				<div class="form-group">
					<label>Password</label>
					<input class="form-control"type="password" name="password" placeholder="Password">
				</div>
				<div class="form-group">
					<button name="login" class="btn btn-lg btn-default btn-block btn-primary" type="submit">Sign in</button>
				</div>
			</form>
			<a href="prj.html">Go Back</a>
			<p>
				Don't have a account? <a href="register.php"><button class="btn btn-sm btn-default btn-danger">Sign Up!</button></a>
			</p>
		</div>
	</div>
</div>
    
</body>
</html>