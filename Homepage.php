<!DOCTYPE html>
<?php  
require_once('registration.php');  
?>
<html>
<head>
  <title>LanPLUS Battery Tracking Application</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Knewave" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="scroll.js"></script>
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
        <a class="navbar-brand" href="#">Home</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#about">ABOUT</a></li>
          <li><a href="#batteries">BATTERIES</a></li>
          <li><a href="#register">REGISTER</a></li>
          <li><a href="LoginPage.php">SIGN IN</a></li>
          <li><a href="UserPortalPage.php">USER PORTAL</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="blue text-center">
    <p>LanPLUS</p> 
    <div class="description">
      <p>Manage your battery usage</p> 
    </div>
  </div>

  <a name ="about"></a>
  <div id ="about" class="container-fluid"> 
    <h2>About the Project</h2>
    <h4><strong>MISSION:</strong> Our mission lorem ipsum..</h4> 
    <h4>Lorem ipsum..</h4> 
    <p>Lorem ipsum..</p>
    <p>Lorem ipsum..</p>
    <p>Lorem ipsum..</p>
    <p>Lorem ipsum..</p>
    <p>Lorem ipsum..</p>
    <p>Lorem ipsum..</p>
    <p>Lorem ipsum..</p>
    <p>Lorem ipsum..</p>
    <p>Lorem ipsum..</p>
    <p>Lorem ipsum..</p>
  </div>

  <a name ="batteries"></a>
  <div id="batteries" class="container-fluid grey"> 
    <h2>A little bit about the batteries</h2>
    <h4>Lorem ipsum..</h4> 
    <p>Lorem ipsum..</p>
    <p>Lorem ipsum..</p>
    <p>Lorem ipsum..</p>
    <p>Lorem ipsum..</p>
    <p>Lorem ipsum..</p>
    <p>Lorem ipsum..</p>
    <p>Lorem ipsum..</p>
    <p>Lorem ipsum..</p>
    <p>Lorem ipsum..</p>
    <p>Lorem ipsum..</p>
    <p>Lorem ipsum..</p>
    <p>Lorem ipsum..</p>
  </div>

  <a name = "register"></a>
  <div id="register" class="container-fluid">
  <h1>Registration</h1>
  <p>Register and create an account to track your battery usage.</p>
    <div class="form">   
    <form name="registration" action="" method="post">
      <input type="text" name="username" placeholder="Username" required />
      <input type="email" name="email" placeholder="Email" required />
      <input type="password" name="password" placeholder="Password" required />
      <input type="password" name="passwordConfirm" placeholder="Confirm Password" required />
      <input type="submit" name="submit" value="Register" />
    </form>
  </div>
  </div>

  <footer class="container-fluid grey">
   <p><strong>Copyright &copy 2017 
     <p><strong>LanPLUS</strong></p>
     <p><strong>RMIT University & Swinburne University</strong></p>
   </footer>

 </body>
 </html>