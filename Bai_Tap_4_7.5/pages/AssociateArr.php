<!DOCTYPE html>
<html>

<head>
    <title>Danh sách file đã tải lên</title>
</head>

<body>
    <h2>Danh sách file đã tải lên</h2>

    <?php
    $uploadedFiles = glob("uploads/*.*");
    if ($uploadedFiles) {
        echo "<ul>";
        foreach ($uploadedFiles as $file) {
            echo "<li><a href='$file' target='_blank'>$file</a></li>";
        }
        echo "</ul>";
    } else {
        echo "Chưa có file ảnh nào được tải lên";
    }
    ?>
</body>

</html>