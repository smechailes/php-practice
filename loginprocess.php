<?php
session_start();
echo "<pre>";
print_r ($_POST);
echo "</pre>";


$username = $_POST['username'];
$password =  $_POST['password'];


if (isset($username)){
	 if(isset($password)){
		if($username=="admin"){
			if($password=="admin"){
				$_SESSION["success"] = "Welcome user";
				header('location: dashboard.php');
				}
			else{
			$_SESSION["warning1"] = "Password is incorrect";
			header('location: form.php');	
			}
		}else{
		$_SESSION["warning"] = "Username is incorrect";
		header('location: form.php');
		}
	}else{
	$_SESSION["error1"] = "Enter Password";
	header('location: form.php');
	}
}else{
$_SESSION["error"] = "Enter Username";
header('location: form.php');
}


?>
