<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Reset Password</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Knewave" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="Homepage.php">Home</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="LoginPage.php">SIGN IN</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <div id ="resetPassword" class="container-fluid"> 
    <div class="form">
        <h1>Reset Password</h1>
        <form name="reset" action="processNewPassword.php" method="post">
            <input type="text" name="token" placeholder="Token" required />
            <input type="password" name="password" placeholder="Password" required />
            <input type="password" name="passwordConfirm" placeholder="Confirm Password" required />
            <input type="submit" name="reset" value="Reset" />
        </form>
    </div>
</body>
</html>