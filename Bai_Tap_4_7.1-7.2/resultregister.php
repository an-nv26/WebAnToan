<?php
require "Pages/head.php"
?>
<div id="center">
    <?php
    require "Pages/left.php"
    ?>
    <div class="content">
        <h1>Kết quả đăng ký</h1>
        <?php
        session_start();
        if (isset($_SESSION["name"]) && isset($_SESSION["address"]) && isset($_SESSION["occupation"]) && isset($_SESSION["note"])) {
            $name = $_SESSION["name"];
            $address = $_SESSION["address"];
            $occupation = $_SESSION["occupation"];
            $note = $_SESSION["note"];

            echo "<h2>Thông tin đăng ký</h2>";
            echo "<p><strong>Tên:</strong> $name</p>";
            echo "<p><strong>Địa chỉ:</strong> $address</p>";
            echo "<p><strong>Nghề nghiệp:</strong> $occupation</p>";
            echo "<p><strong>Ghi chú:</strong> $note</p>";

            unset($_SESSION["name"]);
            unset($_SESSION["address"]);
            unset($_SESSION["occupation"]);
            unset($_SESSION["note"]);
        } else {
            echo "<p>Không có thông tin đăng ký</p>";
        }
        ?>

    </div>
</div>
<?php
require "Pages/footer.php"
?>