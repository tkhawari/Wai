<html>
<?php
include("auth.php");
?>
<head>
	<meta charset="utf-8">
	<title>User Portal</title>
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
          <li><a href="logout.php">SIGN OUT</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="blue text-center">
    <div class="description">
    <?php
      echo $_SESSION['username']."'s"." "."Dashboard";
    ?>
    </div>
  </div>

	<div class="container-fluid text-center"> 
	<div class-"row">
		<div class="col-sm-4">
			<p>Voltage</p>
			<div id="circle">
			</div>
		</div>
		<div class="col-sm-4">
			<p>Current</p>
			<div id="circle">
			</div>
		</div>	
		<div class="col-sm-4">
			<p>Temperature</p>
			<div id="circle">
			</div>
		</div>
	</div>
	</div>
<div class="container-fluid text-center"> 
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
	$username = $_SESSION['username'];
	$underCharged = 2;
    $overCharged = 4;
    $safeCurrent = 2;
    $safeTemp = 2;

	//select every battery the user has and display information

	$sql = "SELECT voltage, current, temperature FROM Batteries LEFT JOIN MyUsers ON MyUsers.id = Batteries.userId WHERE username='$username'";
    $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0)
        {
        	// output data of each row
			// while($row = mysqli_fetch_assoc($result)) {
			// echo "voltage: ".$row["voltage"]." battCurrent: ".$row["current"]." temperature ".$row["temperature"]."<br>";
			//  }
		while($row = mysqli_fetch_assoc($result)) {
        	
			if($row["voltage"]>$overCharged)
			{
				echo "Voltage too high it is above ".$overCharged."<br>";
			}
			else if($row["voltage"]<$underCharged)
			{
				echo "Voltage is too low it is below ".$underCharged."<br>";
			}
			else if($row["current"]>$safeCurrent)
			{
				echo "Current too high it is above ".$safeCurrent."<br>";
			}
			else if ($row["temperature"]>$safeTemp)
			{
				echo "Temperature too high it is above ".$safeTemp."<br>";
			}
			echo "Voltage: ".$row["voltage"]." Battery Current: ".$row["current"]." Temperature ".$row["temperature"]."<br>";
			}
		}
		else
		{
			echo "no battery registered";
		}
?>
</div>
  </div> 
  </body>
 </html>