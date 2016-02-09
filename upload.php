
<?php

if (strcmp($_FILES["fileToUpload"]["name"], ".htaccess") == 0)
{
	header('Location: index.php');
    die();
}

$target_dir = "Data/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    header('Location: index.php');
    die();
} else {
    echo "Sorry, there was an error uploading your file.";
}
