<?php include 'navbar.php';?>
<h1>Level4</h1>
<h1>how are you still uploading a php file??? fine i'll ban it.</h1>
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
$info = new SplFileInfo($files["name"]);
$extension = strtolower($info->getExtension());
$uploadOk = true;
if($files["name"] != ""){
  $target_dir = "uploads/lvl4/" . $files["name"];
  if($extention == "php"){
    echo "Sorry, can't accept php files!\n";
    $uploadOk = false;
  }
  if($uploadOk && $extension == "php5" && move_uploaded_file($files["tmp_name"],$target_dir)){
    echo "this Level is only for PoC. Most servers dont include other php extensions by default. Its just still worth trying since one can get lucky :)";
    echo "<br>";
    echo "<a href='$target_dir'>uploaded image!</a>";
  }
  if($uploadOk && ($extension == "png" || $extension == "jpeg") && move_uploaded_file($files["tmp_name"],$target_dir)){
    echo "<a href='$target_dir'>uploaded image!</a>";
  }
}
?>
