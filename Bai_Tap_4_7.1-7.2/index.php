<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tạo và sử dụng template</title>
</head>

<body>
    <?php
    require "Pages/head.php"
    ?>
    <div id="center">
        <?php
        require "Pages/left.php"
        ?>
        <div class="content">
            <h1>Nguyen Van An</h1>
            <p>Mã sinh viên : <b>AT170301</b></p>
            <p>Lớp : <b>AT17C</b></p>
            <p>Address :<b>Phú Nghĩa, Chương Mỹ, Hà Nội</b></p>
            <p>Email : <b>nvan260602@gmail.com</b></p>
            <p>Số điện thoại : <b>0385630***</b></p>
        </div>
    </div>
    <?php
    require "Pages/footer.php"
    ?>
</body>

</html>