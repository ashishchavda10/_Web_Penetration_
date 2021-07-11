<!DOCTYPE html>
<html>
<head>
	<title>SQL Injection</title>
	<link rel="stylesheet" href="../Resources/style4.css">
</head>
<body>
   <div style="background-color:#fff;padding:15px;">
      <button class ="button" name="homeButton" onclick="location.href='../index.html';">Home Page</button>
      <button class="button" name="mainButton" onclick="location.href='sqlmainpage.html';">SQLi Home Page</button>  
      </div>


	<div align="center" style="margin-top: 6%";>
	<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" >
		<p>John -> Doe</p>
		First name : <input type="text" name="firstname">
		<input type="submit" name="submit" value="Submit">
	</form>
	</div>


<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db = "test_database";

	// Create connection
	$conn = mysqli_connect($servername,$username,$password,$db);

	// Check connection
	if (!$conn) {
    	die("Connection failed: " . mysqli_connect_error());
	} 
	//echo "Connected successfully";
	
	if(isset($_POST["submit"])){
		$firstname = $_POST["firstname"];
		$sql = "SELECT lastname FROM users WHERE firstname='$firstname'";//String
		$result = mysqli_query($conn,$sql);
		
		if (mysqli_num_rows($result) > 0) {
        // output data of each row
    		while($row = mysqli_fetch_assoc($result)) {
       			echo $row["lastname"];
       			echo "<br>";
    		}
		} else {
    		echo "0 results";
		}
	}
	
 ?>
</body>
</html>
