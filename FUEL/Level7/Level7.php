<?php include 'navbar.php';?>
<h1>Level7</h1>
<h1>Now we come to obfiscation/stripping part3%21</h1>
<br>
<br>
<?php error_reporting(0); ?>
<div class="upload-form">
    <h2>Upload an Image!</h2>
    <form action="" method="POST" enctype="multipart/form-data">
      <label for="fileToUpload">Select a file:</label>
      <input type="file" name="fileToUpload" id="fileToUpload">
      <input type="submit" value="Upload" name="submit">
    </form>
</div>

<?php
$files = $_FILES["fileToUpload"];
$uploadOk = true;
if($files['name'] != ""){
  $target_dir = urldecode("uploads/lvl7/" . $files["name"]);
  $extension = strtolower(pathinfo($target_dir,PATHINFO_EXTENSION));
  if($extension != "jpg" && $extension != "png"){
    echo "Sorry, only JPG & PNG files are allowed\n";
    $uploadOk = false;
  }
  $target_dir = strtok($target_dir,chr(0));
  if($uploadOk && move_uploaded_file($files["tmp_name"],$target_dir)){
    echo "<a href='$target_dir'>uploaded image!</a>";
  }
}
?>