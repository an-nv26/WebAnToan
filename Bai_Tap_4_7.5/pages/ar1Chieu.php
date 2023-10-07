<!DOCTYPE html>
<html>

<head>
    <title>Tính toán mảng một chiều</title>
    <style>
        input[type="number"] {
            width: 50px;
            height: 30px;
            margin-right: 10px;
            background-color: #FFFFE0;
            border-left: 1px solid #000;
            border-top: 1px solid #000;
        }

        .number {
            display: flex;
            flex-direction: row;
            margin-bottom: 20px;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <h2>Tính toán mảng một chiều</h2>

    <form method="post" action="index.php?page=ar1Chieu">
        <label>Nhập số:</label><br>
        <div class="number">
            <?php
            for ($i = 1; $i <= 10; $i++) {
                $defaultValue = isset($_POST["number$i"]) ? $_POST["number$i"] : '';
                echo "<input type='number' name='number$i' value='$defaultValue' required><br>";
            }
            ?>
        </div>
        <input type="submit" name="calculate" value="Calculate">
        <input type="reset" name="reset" value="Reset">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["calculate"])) {
        $numbers = array();

        for ($i = 1; $i <= 10; $i++) {
            $number = $_POST["number$i"];
            $numbers[] = $number;
        }

        if (!empty($numbers)) {
            $sum = array_sum($numbers);
            $average = $sum / count($numbers);
            $max = max($numbers);

            echo "<h3>Kết quả:</h3>";
            echo "Tổng: $sum<br>";
            echo "Trung bình: $average<br>";
            echo "Max: $max<br>";
        } else {
            echo "Vui lòng nhập lại";
        }
    }
    ?>
</body>

</html>