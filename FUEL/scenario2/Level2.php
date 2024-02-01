<script src="/js/checker.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="/js/script.js"></script>
<?php include 'navbar.php';?>
<h1>Level2</h1>
<h1>This time we want an Image for real!, so we filtered your Input :)</h1>
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
    <p style="display:none;" id="errorMsg">Invalid File Type</p>
		<p style="display:none;" id="uploadtext"></p>
		<p class="responseMsg" style="display:none;" ></p>
</div>
<?php 
$files = $_FILES["fileToUpload"];
if($files["name"] != ""){
    $target_dir = "uploads/lvl2/" . $files["name"];
    if(move_uploaded_file($files["tmp_name"],$target_dir)){
        echo "<a href='$target_dir'>uploaded image!</a>";
    }
}
?>
