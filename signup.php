<?php
session_start();

	include("connection.php");
	include("functions.php");

	if (isset($_POST['add'])) {
		$user_name = $_POST['user_name'];
		$user_password = $_POST['password'];
		if (!empty($user_name) && !empty($user_password) && !is_numeric($user_name)) {
			// insert into database.............
			$user_ id = random_num(20);
			$query = "insert into users (user_id,username,password) values ('$user_id','$user_name','$user_password')";
			mysqli_query($con, $query);

			//redirect to...............
			header("location: login.php");
		}else{
			echo "Please enter some valid information!";
		}
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Signup</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" integrity="sha512-Ez0cGzNzHR1tYAv56860NLspgUGuQw16GiOOp/I2LuTmpSK9xDXlgJz3XN4cnpXWDmkNBKXR/VDMTCnAaEooxA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
	<div class="container-fluid">
		<div class="row mt-5">
			<div class="col-md-4 m-auto bg-secondary p-2" style="border-radius: 3px;">
				<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
					<h5 style="text-align: center;">Sign Up</h5>
					<input type="text" class="form-control mb-2" name="user_name" placeholder="User Name">
					<input type="password" class="form-control mt-1 mb-2" name="password" placeholder="Password">
					<button class="btn btn-primary btn-block mt-1" name="add" type="submit"> Sign Up</button>
				</form>
				<p class="newac">Already have an account? <a href="login.php"> Login</a></p>
			</div>
		</div>
	</div>
</body>
</html>