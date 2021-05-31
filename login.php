<?php

session_start();

	include("connection.php");
	include("functions.php");

	if(isset($_POST['add'])) {
		$user_name = $_POST['user_name'];
		$user_password = $_POST['password'];
		if (!empty($user_name) && !empty($user_password) && !is_numeric($user_name)) {
			$query = "select * from users where username = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result){
				if($result && mysqli_num_rows($result) > 0){
					$user_data = mysqli_fetch_assoc($result);
						if($user_data['password'] === $user_password) {
							if($_SEESION['user_id'] = $user_data['user_id']){
							header("Location: index.php");				
						}
					}
				}
				//redirect to...............
							
			}
			
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
	<title>Login</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" integrity="sha512-Ez0cGzNzHR1tYAv56860NLspgUGuQw16GiOOp/I2LuTmpSK9xDXlgJz3XN4cnpXWDmkNBKXR/VDMTCnAaEooxA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
	<div class="container-fluid">
		<div class="row mt-5">
			<div class="col-md-4 m-auto bg-secondary p-2" style="border-radius: 3px;">
				<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
					<h5 style="text-align: center;">Login</h5>
					<label>User Name</label>
					<input type="text" class="form-control mb-2" name="user_name" placeholder="User Name">
					<input type="password" class="form-control mt-1 mb-2" name="password" placeholder="Password">
					<button class="btn btn-primary btn-block mt-1" name="add" type="submit">Login</button>
				</form>
				<p class="newac">Don't have an account? <a href="signup.php"> Sign Up</a></p>
			</div>
		</div>
	</div>
</body>
</html>