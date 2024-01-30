<?php include 'navbar.php';?>
<h1>Level1</h1>
<h1>This is a basic FileUpload Website with no filters. Your goal is to run php code.</h1>
<br>
<br>

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
if($files["name"] != ""){
    $target_dir = "uploads/lvl1/" . $files["name"];
    if(move_uploaded_file($files["tmp_name"],$target_dir)){
        echo "<a href='$target_dir'>uploaded image!</a>";
    }
}
?>


