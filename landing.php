<!DOCTYPE html>
<html>
<head>
	<title>ResMatch</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Lato:ital@0;1&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- <link href="styles.css" type="text/css" rel="stylesheet"> -->

  <style media="screen">
    .jumbotron
    {
      /* background-color:rgba(100, 100, 100, 0.5); */
      opacity: 0.8;
    }
    .jumbotron:hover
    {
      opacity: 0.9;
    }

    body
    {
       background: url("https://images.unsplash.com/photo-1601315379734-425a469078de?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=2249&q=80");
       background-size: cover;
       background-repeat: no-repeat;
    }
  </style>
</head>

<body id="landing">
<nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">ResMatch</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="">Home</a></li>
        <li><a href="">About</a></li>
        <li><a href="">Contact</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="registerUser.php">Sign Up <i class="fas fa-user-plus"></i></a></li>
        <li><a href="login.php">Login <i class="fas fa-user"></i></a></li>

      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-->
</nav>

	<div class="container">
		<div class="jumbotron">
			<div class="row">
				<div class="col-lg-12"></div>
				<div id="content" style="padding-left:50px;">
					<h1>ResMatch</h1>
					<h3>Collect your favorite recipes and keep them in your pocket forever!</h3>
						<hr>
					<a href="http://localhost:8888/ISP-FINAL-PROJECT/registerUser.php"><button class="btn btn-default btn-lg"><i class="fas fa-utensils"></i> Get Started!</button></a>
				</div>
			</div>
		</div>
	</div>

<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
</body>
</html>
