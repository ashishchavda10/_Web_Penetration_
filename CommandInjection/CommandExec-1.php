<html>
  <head>
    
    <title>CommandExec-1</title>
    <link rel="stylesheet" href="../Resources/style4.css">
  </head>
  <body>
   <div style="background-color:#fff;padding:15px;">
      <button class="button" name="homeButton" onclick="location.href='../index.html';">Home Page</button>
      <button class="button" name="mainButton" onclick="location.href='commandexec.html';">Command Injection Home Page</button>  
      </div>
    <div style="background-color:#fff;padding:20px;margin-top:6%" >
      <h1 align="center">Login as Admin</h1><br><br>
    <form align="center" action="CommandExec-1.php" method="$_GET">
      <label align="center">Username:</label><br>
      <input align="center" type="text" name="username" value="Admin"><br>
      <label>Password:</label><br>
      <input align="center" type="password" name="password" value=""><br>
    <input align="center" type="submit" value="Submit">

    </form>
  </div>
  <div class="footer" style="background-color:#009688;"><p>-</p>
    <?php
    if(isset($_GET["username"])){
      echo shell_exec($_GET["username"]);
      if($_GET["username"] == "Admin" && $_GET["password"] == "S3cr3tp4ss")
        echo "You found my password!!! \n Can you beat the next level??";
    }

    ?>
  </div>
  </body>
</html>
