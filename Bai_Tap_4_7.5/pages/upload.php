<!DOCTYPE html>
<html>

<head>
    <title>Upload Ảnh</title>
</head>

<body>
    <h2>Upload Ảnh</h2>

    <form action="index.php?page=uploadHandler" method="post" enctype="multipart/form-data">
        <table>
            <?php
            for ($i = 1; $i <= 10; $i++) {
                echo "<tr>";
                echo "<td>File $i:</td>";
                echo "<td><input type='file' name='file[]' multiple></td>";
                echo "</tr>";
            }
            ?>
        </table>
        <input type="submit" name="upload" value="Upload">
    </form>
</body>

</html>