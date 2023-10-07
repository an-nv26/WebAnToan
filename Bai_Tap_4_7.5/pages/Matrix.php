<!DOCTYPE html>
<html>

<head>
    <title>Ma trận</title>
    <style>
        table {
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid white;
            padding: 2px;
        }

        .maTran {
            display: flex;
        }

        input[type="number"] {
            width: 80px;
            height: 20px;
            font-size: 12px;
        }

        .maTran2 {
            margin-left: 20px;
        }
    </style>
</head>

<body>
    <h2>Ma Trận</h2>

    <form method="post" action="index.php?page=Matrix">
        <div class="maTran">
            <div class="maTran1">
                <h3>Ma Trận 1</h3>
                <table>
                    <?php
                    for ($i = 0; $i < 3; $i++) {
                        echo "<tr>";
                        for ($j = 0; $j < 3; $j++) {
                            $value = isset($_POST["matrix1"][$i][$j]) ? $_POST["matrix1"][$i][$j] : '';
                            echo "<td><input type='number' name='matrix1[$i][$j]' value='$value' required></td>";
                        }
                        echo "</tr>";
                    }
                    ?>
                </table>
            </div>
            <div class="maTran2">
                <h3>Ma Trận 2</h3>
                <table>
                    <?php
                    for ($i = 0; $i < 3; $i++) {
                        echo "<tr>";
                        for ($j = 0; $j < 3; $j++) {
                            $value = isset($_POST["matrix2"][$i][$j]) ? $_POST["matrix2"][$i][$j] : '';
                            echo "<td><input type='number' name='matrix2[$i][$j]' value='$value' required></td>";
                        }
                        echo "</tr>";
                    }
                    ?>
                </table>
            </div>
        </div>
        <input type="submit" name="calculate" value="Tính">
        <input type="reset" name="reset" value="Nhập lại">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["calculate"])) {
        $matrix1 = $_POST["matrix1"];
        $matrix2 = $_POST["matrix2"];
        $result = array();

        for ($i = 0; $i < 3; $i++) {
            for ($j = 0; $j < 3; $j++) {
                $result[$i][$j] = $matrix1[$i][$j] + $matrix2[$i][$j];
            }
        }

        echo "<h3>Kết quả:</h3>";
        echo "<h4>Tổng:</h4>";
        displayMatrix($result);

        for ($i = 0; $i < 3; $i++) {
            for ($j = 0; $j < 3; $j++) {
                $result[$i][$j] = $matrix1[$i][$j] - $matrix2[$i][$j];
            }
        }

        echo "<h4>Hiệu:</h4>";
        displayMatrix($result);

        $result = multiplyMatrix($matrix1, $matrix2);

        echo "<h4>Tích:</h4>";
        displayMatrix($result);
    }

    function displayMatrix($matrix)
    {
        echo "<table>";
        foreach ($matrix as $row) {
            echo "<tr>";
            foreach ($row as $value) {
                echo "<td>$value</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }

    function multiplyMatrix($matrix1, $matrix2)
    {
        $result = array();
        for ($i = 0; $i < 3; $i++) {
            for ($j = 0; $j < 3; $j++) {
                $result[$i][$j] = 0;
                for ($k = 0; $k < 3; $k++) {
                    $result[$i][$j] += $matrix1[$i][$k] * $matrix2[$k][$j];
                }
            }
        }
        return $result;
    }
    ?>
</body>

</html>