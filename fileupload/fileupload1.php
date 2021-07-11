
<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="../Resources/style4.css"></head>
  <body>
<div class="container">
	   <div style="background-color:#fff;padding:15px;">
      <button class="button" name="homeButton" onclick="location.href='../index.html';">Home Page</button>
      <button class="button" name="mainButton" onclick="location.href='fileupl.html';">File Upload Main Page</button>  
      </div>
  <?php error_reporting(0); ?><div style="margin-left: 40%;">
   <div class="row" style="margin-top: 6%;"></div>

     <div class="col s9">
       <p>The goal is to upload a php file.</p>
       <div class="card  teal lighten-1">
            <div class="card-content white-text">
                  <?php
                        $files = @$_FILES["files"];
                        $info = new SplFileInfo($files["name"]);
                        $extension=($info->getExtension());
                        if ($files["name"] != '' && $extension !="php") {
                            $fullpath = $_REQUEST["path"] . $files["name"];
                            if (move_uploaded_file($files['tmp_name'], $fullpath)) {
                                #echo "<a href='$fullpath'>OK-Click here!</a>";
                            }
                        }

                        echo '<form method=POST enctype="multipart/form-data" action=""><input type="file" name="files"><input type=submit value="Upload File"></form>';
                ?>
            </div>
            <div class="card-action">
              <?php if($fullpath!= '') { echo "File is valid, and was successfully uploaded <a href=\"$fullpath\">Uploaded</a>"; } ?>
            </div></div>
          </div>

     </div>

   </div>


</div>
  </body>
</html>
