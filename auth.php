<?php
session_start();
if(!isset($_SESSION["username"]))
{
	header("Location: LoginPage.php");
	exit(); 
}
else
{
	//check time now
	$now = time();
	//expiry after 300 seconds (5 mins)
	$session_expire = $_SESSION['login_time'] + 300;
	if ($now > $session_expire)
	{
		session_unset();
		session_destroy();
		echo "session expired";
	}
	
}
?>