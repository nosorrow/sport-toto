<?php
$apikey =  $_SERVER['HTTP_APIKEY'];
if ($apikey === 'wtRBPCdFttMbRcZ8HCDj') {
    $uploads_dir = 'src';
    if (!is_dir($uploads_dir)) {
        if (!mkdir($uploads_dir, 0777, true) && !is_dir($uploads_dir)) {
            throw new \RuntimeException(sprintf('Directory "%s" was not created', $uploads_dir));
        }
    }
    foreach ($_FILES["file"]["error"] as $key => $error) {
        if ($error === UPLOAD_ERR_OK) {
            $tmp_name = $_FILES["file"]["tmp_name"][$key];
            $name = basename($_FILES["file"]["name"][$key]);
            if (move_uploaded_file($tmp_name, "$uploads_dir/$name")) {
                echo "Successfully uploaded file $name\n";
            }
        }
    }
}
