<?php include 'navbar.php';?>
<h1>Level3</h1>
<h1>Hmmm i guess our filter wasn't good enough. So we made a new one! you can only upload an Image.</h1>
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
$allowedTypes = ["image/jpeg","image/png"];
$files = $_FILES["fileToUpload"];
$uploadOk = true;
if($files["name"] != ""){
  $target_dir = "uploads/lvl3/" . $files["name"];
  if(!in_array($files["type"],$allowedTypes)){
    echo "Sorry, file type " . $files["type"] . " is not allowed Only " . implode(' and ', $allowedTypes) . " are allowed\n";
    $uploadOk = false;
  }
  if($uploadOk && move_uploaded_file($files["tmp_name"],$target_dir)){
    echo "<a href='$target_dir'>uploaded image!</a>";
  }
}
?>
