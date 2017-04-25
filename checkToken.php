<?php
//connect to database
$servername = "localhost";
$dbusername = "user";
$dbpassword = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

//check if token has been passed through the GET method
if(isset($_GET['key']))
{
	$token = $_GET['key'];
	
	$result = mysqli_query($conn,"SELECT resetToken FROM MyUsers WHERE resetToken='$token'") 
	 	or die(mysql_error());

	 	$rows = mysqli_fetch_array($result);

		if($rows['resetToken'] == $token)
		{
			echo "New From to reset password";
			//redirect to password reset form
			header("Location: EnterNewPasswordPage.php");
		}
		else
		{
			echo "Invalid Token Provided.";
		}
}


?>