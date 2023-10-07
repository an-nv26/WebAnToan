<style>
    table {
        border-collapse: collapse;
        margin-top: 15px;
        font-size: 20px;
    }

    table,
    th,
    td {
        border: 3px solid gray;
        padding: 25px;
    }

    input[type="submit"] {
        padding: 10px;
        background-color: lightgray;
        border-radius: 10%;
    }

    input[type="number"] {
        width: 250px;
        height: 30px;
        font-size: 16px;
    }

    input[type="checkbox"] {
        width: 25px;
        height: 25px;
        font-size: 20px;
    }

    body {
        font-size: 20px;
    }
</style>

<h1>Trang tính toán</h1>
<form method="post" action="index.php?page=calculate">
    <table>
        <tr>
            <td><b>A</b></td>
            <td><input type="number" name="numberA"></td>
        </tr>
        <tr>
            <td><b>B</b></td>
            <td><input type="number" name="numberB"></td>
        </tr>
        <tr>
            <td>Phép tính:</td>
            <td>
                <input type="checkbox" name="add" value="add">+
                <input type="checkbox" name="subtract" value="subtract">-
                <input type="checkbox" name="multiply" value="multiply">*
                <input type="checkbox" name="divide" value="divide">/
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="calculate" value="Calculate"></td>
        </tr>
    </table>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["calculate"])) {
    $numberA = $_POST["numberA"];
    $numberB = $_POST["numberB"];
    $result = 0;
    echo "<br><b>Kết quả: </b>";
    if (isset($_POST["add"])) {
        $result += $numberA + $numberB;
        echo "Phép cộng: $result<br>";
    }
    if (isset($_POST["subtract"])) {
        $result += $numberA - $numberB;
        echo "Phép trừ: $result<br>";
    }
    if (isset($_POST["multiply"])) {
        $result += $numberA * $numberB;
        echo "Phép nhân: $result<br>";
    }
    if (isset($_POST["divide"])) {
        if ($numberB != 0) {
            $result += $numberA / $numberB;
            echo "Phép chia: $result<br>";
        } else {
            echo "Không thể chia cho 0<br>";
        }
    }
}
?>