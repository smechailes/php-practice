<?php
session_start();
echo "<pre>";
print_r ($_POST);
echo "</pre>";


$username = $_POST['username'];
$password =  $_POST['password'];


if (isset($username) && isset($password)){
	if($username=="admin"){
		if($password=="admin"){
			$_SESSION['success'] = "Welcome user";
			header('location: dashboard.php');
		}else{
						$_SESSION['warning'] = "Enter password";
						header('location: form.php');	
					      }
	}else{
	$_SESSION['warning'] = "Enter username";
	header('location: form.php');
	}

}else{
$_SESSION['error'] = "Enter Username or password.";
header('location: form.php');
}


?>
