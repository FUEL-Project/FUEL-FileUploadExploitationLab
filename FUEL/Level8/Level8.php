<?php include 'navbar.php';?>
<h1>Level8</h1>
<h1>Now we come to the magical part! We only accept gif!</h1>
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
if($files["name"] != ""){
  $finfo = finfo_open(FILEINFO_MIME_TYPE);
  $type = finfo_file($finfo,$files["tmp_name"]);
  finfo_close($finfo);
  $target_dir = "uploads/lvl8/" . $files["name"];
  if(strpos($type,"image/gif") === false){
    echo " Sorry, only gif files are accepted!";
    $uploadOk = false;
  }
  if($uploadOk && move_uploaded_file($files["tmp_name"],$target_dir)){
    echo "<a href='$target_dir'>uploaded image!</a>";
  }
}
?>
