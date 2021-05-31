<?php
//function for check login.
function Check_login($con){
	if(isset($_SESSION['user_id'])){

		$id = $_SESSION['user_id'];
		$query = "select from users where user_id = '$id' limit 1";
		$result = mysqli_query($con, $query);
		if($result > 0){
			//Return User data............
			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	}
}



//function for get a random number.......
function random_num($length){

	//access a random number.......
	$text = "";
	if($length<6){
		$length=6;
	}
	$len = rand(5, $length);

	for ($i=0; $i < $len; $i++) { 
		// get a random number.......
		$text .= rand(0,9);
	}
	return $text;
}

?>


