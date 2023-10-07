<?php
require "Pages/head.php"
?>
<div id="center">
    <?php
    require "Pages/left.php"
    ?>
    <style>
        @keyframes moveText {
            from {
                transform: translateX(0);
            }

            to {
                transform: translateX(200px);
            }

        }

        #movingText {
            font-size: 24px;
            animation: moveText 2s infinite alternate;
        }
    </style>
    <div class="content">
        <h2>Kết quả:</h2>
        <?php
        function tinhGiaiThua($n)
        {
            if ($n <= 1) {
                return 1;
            } else {
                return $n * tinhGiaiThua($n - 1);
            }
        }

        $giaiThua10 = tinhGiaiThua(10);
        echo "<p>Giai thừa của 10 là: $giaiThua10</p>";

        $banKinh = 10;

        $dienTichHinhTron = pi() * pow($banKinh, 2);

        $theTichKhoiCau = (4 / 3) * pi() * pow($banKinh, 3);
        ?>

        <p>Bán kính của hình tròn: <?php echo $banKinh; ?></p>
        <p>Diện tích hình tròn: <?php echo $dienTichHinhTron; ?></p>
        <p>Thể tích khối cầu: <?php echo $theTichKhoiCau; ?></p>

        <div id="movingText">Hello, my name An</div>
    </div>
</div>
<?php
require "Pages/footer.php"
?>