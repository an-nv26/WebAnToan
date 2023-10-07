<!DOCTYPE html>
<html>

<head>
    <title>Kết quả đăng ký</title>
</head>

<body>
    <h2>Kết Quả Đăng Ký</h2>

    <?php
    if (isset($_POST["register"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $gender = $_POST["gender"];
        $address = $_POST["address"];
        $programmingLanguages = isset($_POST["programming_language"]) ? implode(", ", $_POST["programming_language"]) : "";
        $skill = $_POST["skill"];
        $marriageStatus = isset($_POST["marriage_status"]) ? "Married" : "Single";
        $note = $_POST["note"];

        echo "<p>Thông Tin Đăng Ký</p>";
        echo "<p>Username: $username</p>";
        echo "<p>Password: $password</p>";
        echo "<p>Gender: $gender</p>";
        echo "<p>Address: $address</p>";
        echo "<p>Enable Programming Language: $programmingLanguages</p>";
        echo "<p>Skill: $skill</p>";
        echo "<p>Marriage Status: $marriageStatus</p>";
        echo "<p>Note: $note</p>";
    } else {
        echo "Không có dữ liệu đăng ký.";
    }
    ?>
</body>

</html>