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

//email validation
if (isset($_POST['submit']))
{
	if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
	{
	$error = "Please enter a valid email address";
	} 
	else 
	{	//validate email from form
		$email = $_POST['email'];
		$email = stripslashes($_POST['email']);
		$email = mysqli_real_escape_string($conn,$email);

		//query table for email
		$result = mysqli_query($conn,"SELECT email FROM MyUsers WHERE email='$email'") 
	 	or die(mysql_error());

	 	$rows = mysqli_fetch_array($result);

	 	//if email exists in table
		if($rows['email'] == $email)
		{
			//create the activation code
			$token = md5(uniqid(rand(),true));
			$result = mysqli_query($conn,"UPDATE MyUsers SET resetToken ='$token' WHERE email='$email'");
			echo "email found";
			echo $token;
			echo "user record update";
			echo "<p><a href='checkToken.php?key=$token'>checkToken.php?key=$token</a></p>";

			//mail token to the recipient			
		}
		else
		{
			echo "Email provided is not recognised.";
		}
	}
} 
?>