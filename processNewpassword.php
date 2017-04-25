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

//if form has been submitted
if (isset($_POST['reset']))
{
    //validation: password does not match
    if ($_POST['password'] != $_POST['passwordConfirm'])
    {
        echo "Password does not match.";
        //redirect to password reset form and try again
        //header("Location: resetPassword.php");
    }
    else
    {
        //hash the password
        //$hashedpassword = $user->password_hash($_POST['password'], PASSWORD_BCRYPT);
        $password = $_POST['password'];
        echo $password;

        $token = $_POST['token'];
        echo $token;

        if (isset($_POST['token']))
        {
            $result = mysqli_query($conn,"UPDATE MyUsers SET password = '$password' WHERE resetToken ='$token'");
            echo "Password reset."; 
            //maybe have a page that says succesfully reset password
            header("Location: LoginPage.php");
        }
        else
        {
            echo "password not reset.";
        }

    }
}          
?>