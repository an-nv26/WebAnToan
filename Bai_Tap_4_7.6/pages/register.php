<!DOCTYPE html>
<html>

<head>
    <title>Đăng Ký</title>
</head>

<body>
    <h2>Đăng Ký</h2>
    <form method="post" action="index.php?page=RegisterProcess">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <label>Gender:</label>
        <input type="radio" id="male" name="gender" value="Male" required>
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="Female" required>
        <label for="female">Female</label><br><br>

        <label for="address">Address:</label>
        <select id="address" name="address" required>
            <option value="Hanoi">Hà Nội</option>
            <option value="HCM">Bắc Ninh</option>
            <option value="Hue">Thái Nguyên</option>
            <option value="Danang">Hạ Long</option>
        </select><br><br>

        <label>Enable Programming Language:</label>
        <input type="checkbox" id="php" name="programming_language[]" value="PHP">
        <label for="php">PHP</label>
        <input type="checkbox" id="csharp" name="programming_language[]" value="C#">
        <label for="csharp">C#</label>
        <input type="checkbox" id="java" name="programming_language[]" value="Java">
        <label for="java">Java</label>
        <input type="checkbox" id="cplusplus" name="programming_language[]" value="C++">
        <label for="cplusplus">C++</label><br><br>

        <label for="skill">Skill:</label>
        <select id="skill" name="skill" required>
            <option value="Normal">Normal</option>
            <option value="Good">Good</option>
            <option value="VeryGood">Very Good</option>
            <option value="Excellent">Excellent</option>
        </select><br><br>

        <label for="marriage">Marriage Status:</label>
        <input type="checkbox" id="marriage" name="marriage_status" value="Married">
        <label for="marriage">Married</label><br><br>

        <label for="note">Note:</label><br>
        <textarea id="note" name="note" rows="4" cols="50"></textarea><br><br>

        <input type="reset" name="reset" value="Reset">
        <input type="submit" name="register" value="Register">
    </form>
</body>

</html>