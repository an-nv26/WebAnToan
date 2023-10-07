<h2>Vẽ sử dụng vòng lặp for</h2>

<?php
$numRows = 5;

for ($i = 1; $i <= $numRows; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo '* ';
    }
    echo '<br>';
}
?>

<h2>Vẽ sử dụng vòng lặp do-while</h2>

<?php
$numRows = 6;

for ($i = 1; $i <= $numRows; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo '* ';
    }
    echo '<br>';
}
?>