<html>  
   <head>
      <title> Level 2 </title>
      <link rel="stylesheet" href="../Resources/style4.css">
   </head>

   <body>
            <div style="background-color:#fff;padding:15px;">
      <button class="button" name="homeButton" onclick="location.href='../index.html';">Home Page</button>
      <button class="button" name="mainButton" onclick="location.href='fileinc.html';">File Inclusion Main Page</button>  
      </div>
      <div align="center" style="margin-top: 6%;"><b><h3>This is Level 2</h3></b></div><br>
      <div align="center">
      <a href=lvl2.php?file=1.php><button class="button">Button</button></a>
      <a href=lvl2.php?file=2.php><button class="button">The Other Button!</button></a>
      </div>
      
      <?php         
        echo "</br></br>";

        if (isset( $_GET[ 'file' ])) 
        {
          $secure2 = $_GET[ 'file' ];
          $secure2 = str_replace( array(  "..\\" , ".\\", " ./", "../"),"", $secure2 ); 
            
            if (isset($secure2)) 
            {        
              @include($secure2);
              echo"<div align='center'><b><h5>".$secure2."</h5></b></div> ";   
            }
        }              
      ?>
   </body>
</html>
