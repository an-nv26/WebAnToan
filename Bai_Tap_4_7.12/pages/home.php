<?php

if ($_SESSION['language'] === "vietnamese") {
    require_once("D:/4th_Year/Web an toàn/Lab_4/7.12/languages/vietnamese.php");
} else {
    require_once("D:/4th_Year/Web an toàn/Lab_4/7.12/languages/english.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/center.css">

</head>

<body>
    <div class="home-container">
        <?php echo (WELCOME) ?>
    </div>
</body>

</html>