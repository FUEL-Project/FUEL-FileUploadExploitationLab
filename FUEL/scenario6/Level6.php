<?php include 'navbar.php';?>
<h1>Level6</h1>
<h1>Now we come to obfiscation/STRIPPING part2!</h1>
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
if($files["name"] != ""){
    $file = strtolower($files["name"]);
    if(strpos($target_dir, ".htaccess")){
        echo "The upload if .htaccess files is prohibited.";
        $uploadOk = false;
        http_response_code(403);
    }
    if(strpos($file,".php") != false){
        $file = str_replace(".php","",$file);
    }
    $target_dir = "uploads/lvl6/" . $file;
    if(move_uploaded_file($files["tmp_name"],$target_dir)){
        echo "<a href='$target_dir'>uploaded image!</a>";
    }else{
        echo "something went wrong!";
    }
}
?>
