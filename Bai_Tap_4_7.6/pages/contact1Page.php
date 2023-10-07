<!DOCTYPE html>
<html>

<head>
    <title>Liên hệ</title>
</head>

<body>
    <h2>Liên hệ</h2>
    <form method="post" action="">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" value="<?php echo isset($_POST['username']) ? $_POST['username'] : ''; ?>" required><br><br>

        <label>Gender:</label>
        <input type="radio" id="male" name="gender" value="Male" <?php echo (isset($_POST['gender']) && $_POST['gender'] == 'Male') ? 'checked' : ''; ?> required>
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="Female" <?php echo (isset($_POST['gender']) && $_POST['gender'] == 'Female') ? 'checked' : ''; ?> required>
        <label for="female">Female</label><br><br>

        <label for="address">Address:</label>
        <select id="address" name="address" required>
            <option value="Hanoi" <?php echo (isset($_POST['address']) && $_POST['address'] == 'Hanoi') ? 'selected' : ''; ?>>Hà Nội </option>
            <option value="HCM" <?php echo (isset($_POST['address']) && $_POST['address'] == 'HCM') ? 'selected' : ''; ?>>Bắc Ninh</option>
            <option value="Hue" <?php echo (isset($_POST['address']) && $_POST['address'] == 'Hue') ? 'selected' : ''; ?>>Thái Nguyên</option>
            <option value="Danang" <?php echo (isset($_POST['address']) && $_POST['address'] == 'Danang') ? 'selected' : ''; ?>>Hạ Long</option>
        </select><br><br>

        <label for="note">Note:</label><br>
        <textarea id="note" name="note" rows="4" cols="50"><?php echo isset($_POST['note']) ? $_POST['note'] : ''; ?></textarea><br><br>

        <input type="reset" name="reset" value="Reset">
        <input type="submit" name="contact" value="Contact">
    </form>

    <?php
    if (isset($_POST["contact"])) {
        $username = $_POST["username"];
        $gender = $_POST["gender"];
        $address = $_POST["address"];
        $note = $_POST["note"];

        echo "<h3>Thông Tin Đăng Ký:</h3>";
        echo "<p>Username: $username</p>";
        echo "<p>Gender: $gender</p>";
        echo "<p>Address: $address</p>";
        echo "<p>Note: $note</p>";
    }
    ?>
</body>

</html>