<?php
if(isset($_POST['go'])){
	
	require 'connectdb.php';

	$username = $_POST['uname'];
	$email = $_POST['mail'];
	$password = $_POST['pass']; 
	$password2 = $_POST['pass2'];


	if(empty($username)|| empty($email) || empty($password) || empty($password2)){
		header("location: index.php?error=emptyfields&uname=" .$username. "mail=" .$email);
		exit();
		
	}
	else if(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)){
		header("location: index.php?error=invalidmail=");
		exit();
	}	

	else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		header("location: index.php?error=invalidmail&uname=" .$username);
		exit();

	}
	else if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
		header("location: index.php?error=invaliduname&mail=".$email);
		exit();

	}
	else if($password !== $password2){
		header("location: index.php?error=passmismatch=" .$username. "mail=" .$email);
		exit();
	}
	else{
		
		$sql  = "SELECT name from users WHERE name=?";
		$stmt = mysqli_stmt_init($conn);

		if(!mysqli_stmt_prepare($stmt, $sql)){
			header("location: index.php?error=sqlerror");
			exit();

			}
		
	else{
		mysqli_stmt_bind_param($stmt, "s", $username);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_store_result($stmt);
		$resultCheck = mysqli_stmt_num_rows($stmt);

		if($resultCheck > 0){
			header("location: index.php?error=usertaken&".$email);
			exit();
		}
		else{
			
			$sql = "INSERT INTO users (name, mail, pass) VALUES ( ?,?,?)";
			$stmt = mysqli_stmt_init($conn);

			if(!mysqli_stmt_prepare($stmt, $sql)){
			header("location: index.php?error=sqlerror");
			exit();

			}
			else{

				$hashedpwd = password_hash($password, PASSWORD_DEFAULT);

		mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedpwd);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_store_result($stmt);
		header("location: success.php?signup=success");
		exit(); 
			}
		}
	}



}

}
else{
	header("Location:index.php");
	exit();
}