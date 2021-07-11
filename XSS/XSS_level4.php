<!DOCTYPE html>
<html>
<head>
	<title>XSS 4</title>
  <link rel="stylesheet" href="../Resources/style4.css">
</head>
<body>
	   <div style="background-color:#fff;padding:15px;">
      <button class="button" name="homeButton" onclick="location.href='../index.html';">Home Page</button>
      <button class="button" name="mainButton" onclick="location.href='xssmainpage.html';">XSS Main Page</button>  
      </div>
<div align="center" style="margin-top: 6%">
<form method="GET" action="" name="form">
     <p style="font-size: 18px">Enter a search term: <input type="text" name="username"></p>

   <input type="submit" name="submit" value="Submit">
</form>
	</div>
<?php 
if (isset($_GET["username"])) {
    $values = array("script", "prompt", "alert", "h1");
 	$user = str_replace($values, " ",$_GET["username"]);
	echo "You searched for: "."$user";
}

 ?>

</body>
</html>
