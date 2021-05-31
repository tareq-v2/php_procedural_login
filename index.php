<?php
session_start();

include("connection.php");
include("functions.php");

$user_data=Check_login($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>My Website Home</title>
</head>
<body>
	
	<a href="logout.php">Logout</a>

	<h1>This is my index page.</h1>

	Hello, username.
</body>
</html>