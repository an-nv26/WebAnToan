<?php
session_start();
if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
    header("location: admin/index.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username === "admin" && $password === "admin") {
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;

        header("location: admin/index.php");
        exit();
    } else {
        $error_message = "Tên tài khoản hoặc mật khẩu không đúng.";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Đăng Nhập</title>

</head>

<body>
    <h2>Đăng Nhập</h2>
    <?php if (isset($error_message)) { ?>
        <p style="color: red;"><?php echo $error_message; ?></p>
    <?php } ?>
    <form method="post">
        <label for="username">Tên Đăng Nhập:</label>
        <input type="text" name="username" id="username" required><br><br>

        <label for="password">Mật Khẩu:</label>
        <input style="margin-left:34px;" type="password" name="password" id="password" required><br><br>

        <input type="submit" name="login" value="Đăng Nhập">
    </form>
</body>

</html>