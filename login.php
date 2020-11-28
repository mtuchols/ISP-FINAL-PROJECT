<?php include('index.php'); ?>
<! DOCTYPE html>
<html>
<head>
	<title> Login Page </title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="container">
	<div class="row">

		<div id="form">
			<h1 style="text-align: center;">Login</h1>
			<form action="login.php" method="POST">
				<?php include('errorHandling.php') ?>
				<div class="form-group">
					<label>Username</label>
					<input class="form-control"type="text" name="username" placeholder="Username">
				</div>
				<div class="form-group">
					<label>Password</label>
					<input class="form-control"type="password" name="password" placeholder="Password">
				</div>
				<div class="form-group">
					<button class="btn btn-lg btn-default btn-block btn-primary" type="submit">Sign in</button>
				</div>
			</form>
			<a href="/">Go Back</a>
			<p>
				Don't have a account? <a href="registerUser.php"><button class="btn btn-sm btn-default btn-danger">Sign Up!</button></a>
			</p>
		</div>
	</div>
</div>
</body>
</html>
