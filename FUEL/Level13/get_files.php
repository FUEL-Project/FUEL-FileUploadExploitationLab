<?php
$folder = "uploads/lvl13";

$files = scandir($folder);
$files = array_diff($files, array(".", ".."));
$files = array_values($files); 

header("Content-Type: application/json");
echo json_encode($files);
?>
