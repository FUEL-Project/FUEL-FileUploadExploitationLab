<?php
if ($_SERVER['REQUEST_METHOD'] === 'PUT') {
    $putData = file_get_contents("php://input");
    $filename = "uploads/lvl13/" . $_SERVER['HTTP_X_FILENAME'];
    file_put_contents($filename, $putData);
    
    echo "File updated successfully!";
} else {
    echo "This is a simple PHP file updater.";
}
?>