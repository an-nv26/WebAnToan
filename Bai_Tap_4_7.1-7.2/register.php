<?php
require "Pages/head.php"
?>
<div id="center">
    <?php
    require "Pages/left.php"
    ?>
    <style>
        form {
            max-width: 400px;
            margin: 0 auto;
        }

        label {
            display: block;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 5px;
            margin-bottom: 10px;
        }

        input[type="submit"],
        input[type="button"] {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover,
        input[type="button"]:hover {
            background-color: #0056b3;
        }

        .content {
            margin: 0 auto;
        }

        h2 {
            text-align: center;
        }
    </style>
    <div class="content">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST["name"];
            $address = $_POST["address"];
            $occupation = $_POST["occupation"];
            $note = $_POST["note"];

            session_start();
            $_SESSION["name"] = $name;
            $_SESSION["address"] = $address;
            $_SESSION["occupation"] = $occupation;
            $_SESSION["note"] = $note;

            header("Location: resultregister.php");
            exit();
        }
        ?>
        <h2>Đăng Ký</h2>
        <form method="POST">
            <label for="name">Tên:</label>
            <input type="text" id="name" name="name" required>

            <label for="address">Địa chỉ:</label>
            <input type="text" id="address" name="address" required>

            <label for="occupation">Nghề Nghiệp:</label>
            <input type="text" id="occupation" name="occupation" required>

            <label for="note">Ghi chú:</label>
            <textarea id="note" name="note" rows="4"></textarea>

            <input type="submit" value="Đăng ký">
            <input type="button" value="Xóa">
        </form>
    </div>
</div>
<?php
require "Pages/footer.php"
?>