<!DOCTYPE html>
<html>

<head>
    <style>
        label,
        input {
            margin-top: 15px;
            display: inline-block;
            margin-right: 15px;
        }

        form {
            max-width: 500px;
            margin: 0 auto;
            border: 2px solid lightgray;
            background-color: lightgray;
        }

        #submit {
            display: flex;
            padding-left: 15px;
        }

        .nhap {
            padding-left: 15px;
        }

        #tongDiem {
            border: 3px solid black;
            position: relative;
            left: -9px;
            padding-left: 9px;
        }

        #Hoten {
            position: relative;
            left: -6px;
            padding-left: 10px;
        }
    </style>
</head>

<body>
    <h2>Tính điểm tổng</h2>

    <form method="post" action="index.php?page=score" onsubmit="return tinhTongDiem();">
        <label for="hoTen">Họ và Tên:</label>
        <input type="text" name="hoTen" id="Hoten" required><br>

        <label for="lop">Lớp:</label>
        <input class="nhap" style="margin-left: 35px;" type="text" name="lop" required><br>

        <label for="diemM1">Điểm M1:</label>
        <input class="nhap" type="number" name="diemM1" step="0.01" required><br>

        <label for="diemM2">Điểm M2:</label>
        <input class="nhap" type="number" name="diemM2" step="0.01" required><br>

        <label for="diemM3">Điểm M3:</label>
        <input class="nhap" type="number" name="diemM3" step="0.01" required><br>

        <label for="tongDiem">Tổng điểm:</label>
        <input type="text" name="tongDiem" id="tongDiem" readonly><br>
        <div id="submit">
            <input type="submit" name="ok" value="OK">
            <input style="margin-left: 25px;" type="submit" name="cancel" value="Cancel">
        </div>
    </form>

    <script>
        function tinhTongDiem() {
            var diemM1 = parseFloat(document.getElementsByName("diemM1")[0].value);
            var diemM2 = parseFloat(document.getElementsByName("diemM2")[0].value);
            var diemM3 = parseFloat(document.getElementsByName("diemM3")[0].value);
            var tongDiem = diemM1 + diemM2 + diemM3;
            document.getElementById("tongDiem").value = tongDiem.toFixed(2);
            return false;
        }
    </script>
</body>

</html>