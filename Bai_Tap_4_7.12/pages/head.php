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
    <link rel="stylesheet" href="../css/head.css">



</head>

<body>
    <div class="header-container">
        <img class="img-header" src="../images/banner.jpg" alt="">
        <nav class="pages">
            <form method="post" action="../pages/center.php">
                <input type="submit" value="<?php echo (VIETNAMESE) ?>" name="submit_vietnamese">
                <input type="submit" value="<?php echo (ENGLISH) ?>" name="submit_english">
            </form>
            <form method="post" action="../pages/center.php">
                <input type="submit" value="<?php echo (HOME) ?>" name="submit_home">
                <input type="submit" value="<?php echo (CONTACT) ?>" name="submit_contact">
                <input type="submit" value="<?php echo (INTRODUCTION) ?>" name="submit_introduction">
                <input type="submit" value="<?php echo (LOGIN) ?>" name="submit_login">
            </form>
        </nav>
    </div>
</body>

</html>