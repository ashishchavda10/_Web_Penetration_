<html>
   <head>
     
      <title> Level 1 </title>
      <link rel="stylesheet" href="../Resources/style4.css">
   </head>


   <body>    
      <div style="background-color:#fff;padding:15px;">
      <button class="button" name="homeButton" onclick="location.href='../index.html';">Home Page</button>
      <button class="button" name="mainButton" onclick="location.href='fileinc.html';">File Inclusion Main Page</button>  
      </div>
      <div align="center" style="margin-top: 6%;"><b><h3>This is Level 1</h3></b></div><br>
      <div align="center">
      <a href=lvl1.php?file=1.php><button class="button">Button</button></a>
      <a href=lvl1.php?file=2.php><button class="button">The Other Button!</button></a>
      </div>
      
      <?php
        echo "</br></br>";
        
        if (isset( $_GET[ 'file' ]))        
        {
          @include($_GET[ 'file' ]);
          echo"<div align='center'><b><h5>".$_GET[ 'file' ]."</h5></b></div> ";       
        }
      ?>
   </body>
</html>

