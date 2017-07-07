<?php
session_start();
	if(isset($_SESSION['error']) && $_SESSION['error'] != ""){
			echo "$_SESSION['error']";		
		}
	
	if(isset($_SESSION['warning']) && $_SESSION['warning'] != ""){
			echo "$_SESSION['warning']";		
		}
	
	if(isset($_SESSION['success']) && $_SESSION['success'] != ""){	
			echo "$_SESSION['success']";		
		}
}
?>
welcome to the dashboard
