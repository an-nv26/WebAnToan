<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>
    <link rel="stylesheet" href="./style.css">
    <script src="./main.js" defer></script>
</head>

<body>
    <div id="wrapper">
        <div id="header">
            <div class="img">
                <img src="/images/banner.jpg" alt="banner">
            </div>
            <div class="link">
                <nav>
                    <ul>
                        <li><a href="index.php?page=home">Home</a></li>
                        <li><a href="index.php?page=login">Login</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- end header  -->

        <div id="center">
            <div class="left">
                <img src="/images/web_developer_image.jpg" alt="banner">
                <img src="/images/web_developer_image2.jpg" alt="banner">
            </div>

            <div class="content">
                <?php
                if (isset($_GET['page'])) {
                    $page = $_GET["page"];
                    switch ($page) {
                        case 'home':
                            include "pages/home.php";
                            break;
                        case 'login':
                            include "pages/login.php";
                            break;
                        default:
                            include "pages/login.php";
                            break;
                    }
                } else {
                    include "pages/login.php";
                }
                ?>
            </div>
        </div>

        <!-- footer  -->
        <div id="footer">
            <table>
                <tr>
                    <td class="cell-red"></td>
                    <td class="cell-green"></td>
                    <td class="cell-blue"></td>
                </tr>
                <tr>
                    <td class="cell-green"></td>
                    <td class="cell-blue"></td>
                    <td class="cell-red"></td>
                </tr>
                <tr>
                    <td class="cell-blue"></td>
                    <td class="cell-red"></td>
                    <td class="cell-green"></td>
                </tr>
            </table>
        </div>
        <!-- end footer  -->

</body>

</html>