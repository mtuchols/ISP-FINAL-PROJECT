<?php
session_start();
	$username = "";
	$email = "";
	$errors = array();
	
	$connect = mysqli_connect('localhost', 'root', 'Michaelt1@', 'login');
	
	if (isset($_POST['register']))
	{
		$username = ($_POST['username']);
		$email = ($_POST['email']);	
		$firstPassword = ($_POST['firstPassword']);
		$secondPassword = ($_POST['secondPassword']);
		
		if (empty($username))
		{
			array_push($errors, "You must enter a valid username");
		}
		
		if (empty($email))
		{
			array_push($errors, "You must enter a valid email");
		}
		
		if (empty($firstPassword))
		{
			array_push($errors, "You must enter a password");
		}
		
		if ($firstPassword != $secondPassword)
		{
			array_push($errors, "Passwords do not match");
		}
		
		if (count($errors) ==0)
		{
			$password = md5($firstPassword);
			$insert = "INSERT INTO loginInfo (email, username, password) VALUES ('$email', '$username', '$password')";
			
			mysqli_query($connect, $insert);
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You have successfully logged in";
			
			header('location: loginCheck.php'); // directs to the logged in home page
		}
	}
	
	if (isset($_POST['login']))
	{
		$username = ($_POST['username']);
		$password = ($_POST['password']);
		
		if (empty($username))
		{
			array_push($errors, "You must enter a valid username");
		}
		
		if (empty($password))
		{
			array_push($errors, "You must enter a valid password");
		}		
		if (count($errors) ==0)
		{
		$password = md5($password);
		$query = "SELECT * FROM loginInfo WHERE username = '$username' AND password = '$password'";
		$result = mysqli_query($connect, $query);
		if (mysqli_num_rows($result)==1)
		{
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: loginCheck.php');
		}
		else
		{
			array_push($errors, "The username / password combo is incorrect");
			//header('location: login.php');			
		}
		}			
	}
	
	if (isset($_GET['logout']))
	{
		session_destroy;
		unset($_SESSION['username']);
		header('location: login.php');
	}
?>