<?php include 'navbar.php';?>
<h1>Level11</h1>
<h1>Please stop executing php code!!! I think I banned it now. Hehehe no more php Extentions</h1>
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
  $target_dir = "uploads/lvl11/" . $files["name"];
  $extension = strtolower(pathinfo($target_dir,PATHINFO_EXTENSION));
  if($extension == "php"){
    echo "sorry!!! but php files are not allowed!\n";
    $uploadOk = false;
  }
  if($uploadOk && move_uploaded_file($files["tmp_name"],$target_dir)){
    echo "<a href='$target_dir'>uploaded image!</a>";
  }
}
?>