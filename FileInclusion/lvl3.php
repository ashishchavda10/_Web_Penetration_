<html>  
   <head>
    <link rel="stylesheet" href="../Resources/style4.css">
      <title> Level 4 </title>
   </head>

   <body>
            <div style="background-color:#fff;padding:15px;">
      <button class="button" name="homeButton" onclick="location.href='../index.html';">Home Page</button>
      <button class="button" name="mainButton" onclick="location.href='fileinc.html';">File Inclusion Main Page</button>  
      </div>
      
      <div align="center" style="margin-top: 6%;"><b><h3>This is Level 3</h3></b></div>
      <div align="center"><br>
      <a href=lvl3.php?file=1.php><button class="button">Button</button></a>
      <a href=lvl3.php?file=2.php><button class="button">The Other Button!</button></a>
      </div>
      
      <?php     
        echo "</br></br>";

        if (isset( $_GET[ 'file' ])) 
        {
          $secure4 = $_GET[ 'file' ];
         
            if ($secure4!="1.php" && $secure4!="2.php") 
            {
              $secure4=substr($secure4, 0,-4);
            }
            
            if (isset($secure4)) 
            {        
              include($secure4);              
            }
        }              
      ?>
   </body>
</html>

