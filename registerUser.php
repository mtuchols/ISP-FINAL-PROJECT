<?php include('index.php'); ?>
<! DOCTYPE html>
<html>
<head>
	<title> New User Registration </title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="styles.css">
</head>
<body>

	<div class="container">
		<div class="row">
	    <div id="form">
				<h1 style="text-align: center;">Register!</h1>
			<form action = "registerUser.php" method = "POST">
			<?php include('errorHandling.php') ?>
				<div class="form-group">
		      <label>Create a Username</label>
		      <input type="text" name="username" class="form-control" placeholder="Username">
				</div>

				<div class = "form-group">
					<label>Email address</label>
					<input type="email" name = "email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
					<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
				</div>
				<div class = "form-group">
					<label>Password</label>
					<input type="password" name="firstPassword" class="form-control" id="exampleInputPassword1">
				</div>
				<div class = "form-group">
					<label>Confirm Password</label>
					<input type="password" name="secondPassword" class="form-control" id="exampleInputPassword1">
				</div>
				<div class = "form-group">
					<button type = "submit" name = "register" class = "btn btn-lg btn-default btn-danger btn-block"> Register </button>
				</div>
				<p>
				 	Already have an account? <a href="login.php"><button class="btn btn-sm btn-default btn-primary">Login</button></a>
				</p>
			</form>
		</div>
		</div>
	</div>

</body>
</html>
