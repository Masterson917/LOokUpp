<?php

if(isset($_POST['ent'])){
	
	require 'connectdb.php';

	$mailed = $_POST['desig'];
	$password = $_POST['passed'];


	if(empty($mailed)||empty($password)){
		header("location:index.php?error=emptyfields");
		exit();
	}
	else{
		$sql = " SELECT * FROM users WHERE name=? OR mail=?;";
		$stmt = mysqli_stmt_init($conn);
		
		if(!mysqli_stmt_prepare($stmt, $sql)){
			header("location:index.php?error=sqlerror");
			exit();

		}
		else{
			
			mysqli_stmt_bind_param($stmt, "ss", $mailed, $mailed);
			mysqli_stmt_execute($stmt);
			$result = mysqli_stmt_get_result($stmt);

			if($row = mysqli_fetch_assoc($result)){
				$pswdcheck = password_verify($password, $row['pass']);

				if($pswdcheck == false){
					header("Location:index.php?error=wrongpass");
					exit();
				}else if($pswdcheck == true){
					session_start();
					$_SESSION['userId'] = $row['id'];
					$_SESSION['useruId'] = $row['name'];
					$url= "success2.php";
					$url= "profileset.php";

					header("Location:success2.php");
					exit();

				}else{
					header("Location:index.php?error=wrongpass");
					exit();
				}

			}
			else{
				header("Location:index.php?error=nouser");
				exit();
			}

		}
	}

}
else{
	header("Location:lost.php");
	exit();
}