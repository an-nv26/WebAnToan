<!DOCTYPE html>
<html>

<head>
    <title>Upload</title>
    <style>
        .file-container {
            display: flex;
            align-items: center;
        }

        .file-input {
            flex: 1;
            display: none;
        }

        .file-name {
            flex: 5;
        }

        .browse-button {
            flex: 1;
        }
    </style>
</head>

<body>
    <h2>Upload</h2>
    <form method="post" enctype="multipart/form-data">
        <?php for ($i = 1; $i <= 5; $i++) { ?>
            <div class="file-container">
                <input type="file" name="file<?php echo $i; ?>" id="file<?php echo $i; ?>" class="file-input">
                <input type="text" readonly="readonly" id="file-name<?php echo $i; ?>" class="file-name">
                <button type="button" onclick="document.getElementById('file<?php echo $i; ?>').click();" class="browse-button">Browser</button>
            </div><br>
            <script>
                document.getElementById('file<?php echo $i; ?>').addEventListener('change', function() {
                    document.getElementById('file-name<?php echo $i; ?>').value = this.files[0] ? this.files[0].name : '';
                });
            </script>
        <?php } ?>
        <input type="reset" name="reset" value="Reset">
        <input type="submit" name="upload" value="Upload">
    </form>
</body>

</html>