<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
echo "$target_file";
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
echo "$imageFileType";
?>