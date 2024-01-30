<?php include 'navbar.php';?>
<h1>Level12</h1>
<h1>this time i did it diffeRent. i will check your with A Simple checker and then decide wEther to keep it or not!</h1>
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
    $target_dir = "uploads/lvl12/" . $files["name"];

    //temporary move
    move_uploaded_file($files["tmp_name"],$target_dir);
    if(checkViruses($target_dir) && checkFileType($target_dir)){
        echo "<a href='$target_dir'>uploaded image!</a>";
    } else{
        unlink($target_dir);
        echo "Sorry, there was an error while uploading! <br>";
        http_response_code(403);
    }
    
}

function checkViruses($fileName){
    usleep(500000);
    return true;
}

function checkFileType($fileName){
    $extension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
    if($extension != "jpg" && $extension !="png"){
        echo "Sorry, only JPG & PNG files are allowed <br>";
        return false;
    }else{
       return true; 
    }
}
?>