<?php
if (isset($_POST["upload"])) {
    $uploadFolder = "uploads/";

    if (!is_dir($uploadFolder)) {
        mkdir($uploadFolder, 0777, true);
    }

    foreach ($_FILES["file"]["tmp_name"] as $key => $tmp_name) {
        $file_name = $_FILES["file"]["name"][$key];
        $file_tmp = $_FILES["file"]["tmp_name"][$key];
        $file_path = $uploadFolder . $file_name;

        if (move_uploaded_file($file_tmp, $file_path)) {
            echo "File '$file_name' không thể tải lên.<br>";
        }
    }
}
