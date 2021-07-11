
<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="../Resources/style4.css"></head>
  <?php error_reporting(0); ?>
  <body>
	  	   <div style="background-color:#fff;padding:15px;">
      <button class="button" name="homeButton" onclick="location.href='../index.html';">Home Page</button>
      <button class="button" name="mainButton" onclick="location.href='fileupl.html';">File Upload Main Page</button>  
      </div><div style="margin-left: 40%;margin-top: 6%">
<br>
       <p>Goal for this level is to upload a php file.This program only allows to upload GIF images.</p>
      <div class="card  teal lighten-1">
            <div class="card-content white-text">
              <span class="card-title"</span>
            <form enctype="multipart/form-data" action="" method="POST">
                <input type="hidden" name="MAX_FILE_SIZE" value="100000" />
                <input name="uploadedfile" type="file" />
                <input type="submit" value="Upload File" />
              </form>

            </div>
            <div class="card-action">
              <?php

                          if($_FILES['uploadedfile']['type'] != "image/gif") {
                          if(isset($_FILES['uploadedfile'])){echo "Sorry, GIF only!";}
                          exit;
                          }
                          $uploaddir = '';
                          $uploadfile = $uploaddir . basename($_FILES['uploadedfile']['name']);
                          if (move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $uploadfile)) {
                          echo "File is valid, and was successfully uploaded.\n";
                          } else {
                          echo "File uploading failed.\n";
                          }
                  ?>
              <?php if($uploadfile!= '') { echo "<a href=\"$uploadfile\">Uploaded</a>"; } ?>
            </div>
          </div>

     </div>

   </div>

</div>
  </body>
</html>
