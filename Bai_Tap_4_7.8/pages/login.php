<form action="" method="post" style="margin: 50px 50px 0 50px;">
    <h3 style="padding: 20px 0;">Đăng Nhập</h3>
    <div>
        <label for="username">
            Username:
        </label>
        <input type="text" name="username">
    </div>
    <div>
        <label for="password">
            Password:
        </label>
        <input type=" password" name="password">
    </div>
    <div>
        <button type="reset">Reset</button>
        <button type="submit">Đăng Nhập</button>
    </div>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["username"]) && !empty($_POST["password"])) {
        if ($_POST["username"] == "admin" && $_POST["password"] == "admin") {
            session_start();
            $_SESSION["username"] = "admin";
            setcookie("username", $_POST["username"], time() + 24 * 60 * 60);
            header("location: admin/index.php");
        } else {
            echo "<p style='color: red;'>Ten dang nhap hoac mat khau khong chinh xac</p>";
        }
    }
}
?>