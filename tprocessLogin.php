<?php
//connect to database
$servername = "localhost";
$dbusername = "user";
$dbpassword = "password";
$dbname = "myDB";
//start session
session_start();
// Create connection
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
	//get values from form and get rid of white spaces from beginning and end of string
	$username = trim($_POST['username']);
	$password = trim($_POST['password']);

	//remove backslashes & escape special characters to string
	$username = stripslashes($_POST['username']);
	$username = mysqli_real_escape_string($conn,$username);
	$password = stripslashes($_POST['password']);
	$password = mysqli_real_escape_string($conn,$password);

	//check if user is in database
	$result = mysqli_query($conn,"SELECT * FROM MyUsers WHERE username='$username' 
		and password = '$password'") or die(mysql_error());

	$rows = mysqli_fetch_array($result);
        if($rows['username'] == $username && $rows['password'] == $password)
        {
        	$_SESSION['username'] = $username;
        	//record time of when user logs in
        	$_SESSION['login_time'] = time();
        	//redirect user to user portal
        	header("Location: UserPortalPage.php");
        	echo "successful login";


		}
		else
		{
			echo "not successful";
		}
?>