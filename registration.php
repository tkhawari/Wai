<?php
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

if (isset($_POST['submit']))
{
	//if password does not include numbers 
	//need to validate these values & hash password
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$passwordConfirm = $_POST['passwordConfirm'];

	//if password and confirm password are not the same, ask user to try again
	if ($_POST['password'] != $_POST['passwordConfirm'])
	{
		echo "Try again, password does not match";
	}
	//if password length is less than 6, ask user to try again
	else if (strlen($_POST['password']) < 6) 
	{
		echo "Try again, password is too short";
		//how to let user know the above??
	}
	else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
	{
		echo "Try again, email is incorrect";
		//how to let user know the above??
	}
	else
	{
		//insert values into table
		$sql = "INSERT INTO MyUsers (username,email,password)
		VALUES ('$username','$email','$password')";

		if ($conn->query($sql) === TRUE)
		{
			echo "registration successfull";
		//go to portal
		}
		else
		{	
			echo "Error: ".$sql."<br>".$conn->error;
			//go to another page to try again
		}

	$conn->close();
	}
	

	//validate email
	


}
?>