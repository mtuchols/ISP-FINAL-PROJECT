<?php include('index.php'); ?>
<! DOCTYPE html>
<html>
<head>
	<title> New User Registration </title>
</head>
<body>
<div class = "header">
	<h2> Register </h2>
</div>
<form action = "registerUser.php" method = "POST">
<?php include('errorHandling.php') ?>
	<div class = "input-group">
		<label> Username </label>
		<input type = "text" name ="username">
	</div>
	<div class = "input-group">
		<label> Email    </label>
		<input type = "text" name ="email">
	</div>
	<div class = "input-group">
		<label> Password </label>
		<input type = "password" name ="firstPassword">
	</div>
	<div class = "input-group">
		<label> Confirm Password </label>
		<input type = "password" name ="secondPassword">
	</div>
	<div class = "input-group">
		<button type = "submit" name = "register" class = "btn"> Register </button>
	</div>
	
	<p>
	If you already have an account, sign in here <a href = "login.php"> Sign In </a>
	</p>
</form>
</body>
</html>

