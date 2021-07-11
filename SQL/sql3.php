<!DOCTYPE html>
<html>
<head>
	<title>SQL Injection</title>
	<link rel="stylesheet" href="../Resources/style4.css">
</head>
<body>
<div style="background-color:#fff;padding:15px;">
      <button class="button" name="homeButton" onclick="location.href='../index.html';">Home Page</button>
      <button class="button" name="mainButton" onclick="location.href='sqlmainpage.html';">SQLi Home Page</button>  
      </div>
	<div align="center" style="margin-top: 6%">
	<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" >
		<p>Give me book's number and I give you book's name in my library.</p><br><br>
		Book's number : <input type="text" name="number">
		<input type="submit" name="submit" value="Submit">
		<!--<p>Im learning something, I think?
		    I will sanitize query this time!!
		    //I'm the best web developer.
		     //number is too dangerous. I have to do something.</p>
		-->
	</form>
	</div>

<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db = "test_database";

	// Create connection
	$conn = new mysqli($servername, $username, $password,$db);

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
	//echo "Connected successfully";
	if(isset($_POST["submit"])){
		$number = $_POST['number'];
		//I'm the best web developer.
		//number is too dangerous. I have to do something.
		if(strchr($number,"'")){
			echo "What are you trying to do?<br>";
			echo "Awesome hacking skillzz<br>";
			echo "But you can't hack me anymore!";
			exit;
		}

		$query = "SELECT bookname,authorname FROM books WHERE number = $number"; 
		$result = mysqli_query($conn,$query);

		if (!$result) { //Check result
		    $message  = 'Invalid query: ' . mysql_error() . "\n";
		    $message .= 'Whole query: ' . $query;
		    die($message);
		}

		while ($row = mysqli_fetch_assoc($result)) {
			echo "<hr>";
		    echo $row['bookname']." ----> ".$row['authorname'];    
		}

		if(mysqli_num_rows($result) <= 0)
			echo "0 result";

	}
?> 

</body>
</html>
