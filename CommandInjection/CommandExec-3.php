<html>
  <head>
    <title>CommandExec-3</title>
    <link rel="stylesheet" href="../Resources/style4.css">
  </head>
  <body>
	     <div style="background-color:#fff;padding:15px;">
      <button class="button" name="homeButton" onclick="location.href='../index.html';">Home Page</button>
      <button class="button" name="mainButton" onclick="location.href='commandexec.html';">Command Injection Home Page</button>  
      </div>
    <div style="background-color:#fff;padding:20px;margin-top: 2.8%">
      <h1 align="center">Think more!</h1>
    <form align="center" action="CommandExec-3.php" method="$_GET">
      <label align="center">Implement Blacklist: Check. Try us.</label><br><br>
      <input align="center" type="text" name="typeBox" value="">
<br>      <input align="center" type="submit" value="Submit">
    </form>
  </div>
  <div class="footer" style="background-color:#009688;padding:20px;">
    <?php
    if(isset($_GET["typeBox"])){
      $target =$_GET["typeBox"];
      $substitutions = array(
        ';'  => '',
        '|' => '',
        '`' => ''
      );
      $target = str_replace(array_keys($substitutions),$substitutions,$target);
      
      if($_GET["typeBox"] == "flag")
        echo "You did again! Impressive.";
		else echo system("whois ".$target."| head");
    }

    ?>
  </div>
  </body>
</html>
