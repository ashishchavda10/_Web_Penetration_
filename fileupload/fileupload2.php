
<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="../Resources/style4.css"></head>
  <body>
<div class="container">
	   <div style="background-color:#fff;padding:15px;">
      <button class="button" name="homeButton" onclick="location.href='../index.html';">Home Page</button>
      <button class="button" name="mainButton" onclick="location.href='fileupl.html';">File Upload Page</button>  
      </div>
  <?php error_reporting(0); ?><div style="margin-left: 40%;">
       <p>Goal for this level is to upload a php file.We have filtered php and html files.</p>
       <div class="card  teal lighten-1">
            <div class="card-content white-text">
              <span class="card-title"></span>
              <form enctype="multipart/form-data" action="" method="POST">
                <input type="hidden" name="MAX_FILE_SIZE" value="100000" />
                <input name="uploadedfile" type="file" />
                <input type="submit" value="Upload File" />
              </form>

            </div>
            <div class="card-action">
              <?php
                    $blacklist = array(".php","html","shtml",".phtml", ".php3", ".php4",".php7");
                    foreach ($blacklist as $item) {
                    if(preg_match("/$item\$/", $_FILES['uploadedfile']['name'])) {
                    if(isset($_FILES['uploadedfile'])){echo "We do not allow HTML , PHP files\n";}
                    exit;
                    }
                    }
                    $uploaddir = '';
                    
                    $uploadfile = $uploaddir . basename($_FILES['uploadedfile']['name']);
                    if (move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $uploadfile)) {
                    echo "File is valid, and was successfully uploaded.\n";
                    }
                ?>
                <?php if($uploadfile!= '') { echo "<a href=\"$uploadfile\">Uploaded</a>"; } ?></div>
            </div>
          </div>

     </div>

   </div>

</div>
  </body>
</html>
