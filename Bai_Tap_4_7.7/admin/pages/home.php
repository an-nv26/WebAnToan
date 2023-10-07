<?php
session_start();

$message = "";

if (!isset($_SESSION['username']) || !isset($_SESSION['password'])) {
    $message = "Chưa đăng nhập";
} else {
    $username = $_SESSION['username'];
    $password = $_SESSION['password'];
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
</head>

<body>
    <h2>Home</h2>
    <?php if (!empty($message)) { ?>
        <p style="color: red;"><?php echo $message; ?></p>
    <?php } else { ?>
        <p>Tài khoản: <?php echo $username; ?></p>
        <p>Mật khẩu: <?php echo $password; ?></p>
    <?php } ?>
</body>

</html>