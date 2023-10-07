<!DOCTYPE html>
<html lang="en">
<?php
function ghi_vao_dong($duong_dan_tep, $noi_dung_moi)
{
    $myfile = fopen($duong_dan_tep, "w") or die("Unable to open file!");
    $len = count($noi_dung_moi);
    for ($i = 0; $i < $len; $i++) {
        fwrite($myfile, $noi_dung_moi[$i]);
    }
    $checkWriteFile = true;
}

$file_path = '../student.txt';
$dong_bat_dau = $_GET["stt"] * 4;
$dong_ket_thuc = $dong_bat_dau + 3;

$lines = file($file_path);
$ten = $lines[$dong_bat_dau + 0];
$addr = $lines[$dong_bat_dau + 1];
$age = $lines[$dong_bat_dau + 2];
$class = $lines[$dong_bat_dau + 3];


if (isset($_POST['edit-student'])) {
    if (!empty($_POST['name']) && !empty($_POST['address']) && !empty($_POST['age']) && !empty($_POST['class'])) {
        clearstatcache();
        $file_path = '../student.txt';
        $dong_bat_dau = $_GET["stt"] * 4;
        $dong_ket_thuc = $dong_bat_dau + 3;
        $noi_dung_moi = "Nội dung mới cho các dòng 5-8.\n";

        $lines = file($file_path);
        $lines[$dong_bat_dau + 0] = $_POST['name'] . "\n";
        $lines[$dong_bat_dau + 1] = $_POST['address'] . "\n";
        $lines[$dong_bat_dau + 2] = $_POST['age'] . "\n";
        $lines[$dong_bat_dau + 3] = $_POST['class'] . "\n";
        ghi_vao_dong($file_path, $lines);
    }
}


?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../css/center.css">
</head>

<body>
    <div class="container-app">
        <?php include '../pages/head.php'; ?>
        <div class="content">
            <?php include '../pages/left.php'; ?>
            <div class="content-right">
                <div class="add-student-container">
                    <h3>edit sinh viên mới</h3>
                    <form method="POST" action="editStudent.php" class="row">
                        <div class="form-group">
                            <label for="">Tên:</label>
                            <input class="form-control" type="text" name="name" value=<?php echo $ten ?> />
                        </div>
                        <div class="form-group">
                            <label for="">Địa chỉ:</label>
                            <input class="form-control" type="text" name="address" value=<?php echo $addr ?> />
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Tuổi:</label>
                            <input class="form-control" type="text" name="age" value=<?php echo $age ?> />
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Lớp:</label>
                            <input class="form-control" type="text" name="class" value=<?php echo $class ?> />
                        </div>
                        <div>
                            <input class="btn btn-primary" type="submit" name="reset-form" value="Nhập lại">
                            <input class="btn btn-danger" type="submit" name="edit-student" value="Ghi">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php include '../pages/footer.php'; ?>
    </div>

</body>

</html>