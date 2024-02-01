<?php include 'navbar.php';?>
<h1>Level5</h1>
<h1>Now we come to obfiscation/stripping pArT1!</h1>
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
$extention = $info->getExtension();
$uploadOk = true;
if($files["name"] != ""){
  $target_dir = "uploads/lvl5/" . $files["name"];
  if($extention == "php"){
    echo "Sorry, can't accept php files!\n";
    $uploadOk = false;
  }
  if($uploadOk && move_uploaded_file($files["tmp_name"],$target_dir)){
    echo "<a href='$target_dir'>uploaded image!</a>";
  }
}
?>