<?php include('index.php'); ?>
<! DOCTYPE html>
<html>
<head>
	<title> Login Page </title>
</head>
<body>
<div class = "header">
	<h2> Login </h2>
</div>
<form action = "login.php" method = "POST">
<?php include('errorHandling.php') ?>
	<div class = "input-group">
		<label> Username </label>
		<input type = "text" name ="username">
	</div>
	<div class = "input-group">
		<label> Password </label>
		<input type = "password" name ="password">
	</div>
	<div class = "input-group">
		<button type = "submit" name = "login" class = "btn"> Login </button>
	</div

	<p>
	If you don't have an account, sign up here <a href = "registerUser.php"> Sign Up </a>
	</p>
</form>
</body>
</html>

