<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab10</title>
</head>
<body>
<?php
/*
 * Гистограмма посещений страницы пользователем за последние 7 дней
 */
require_once '../lab4/LabInfo.php';
$labInfo = new LabInfo();
$labInfo->printInfo(10, "Використання сессій та кукі в PHP", "02-19-2017", "Побудувати гістограму відвідувань сторінки користувачем за останні 7 днів");
$arr = [];
$date = date('d-m-Y');
if (isset($_COOKIE['count'])) {
    $count = $_COOKIE['count'];
    $count++;
    setcookie('count', $count);
} else {
    $count = 1;
    setcookie('count', $count);
}
//Testing data
$arr[$date] = $count;
$arr["20-02-2017"] = 5;
$arr["21-02-2017"] = 1;
$arr["22-02-2017"] = 2;
$arr["23-02-2017"] = 8;
$arr["24-02-2017"] = 23;
$arr["25-02-2017"] = 7;
$arr["26-02-2017"] = 2;
$arr = array_slice($arr, -7, 7, true);
include('BarChart.php');
$bar = new BarChart(500, 400, 'Statistics page for 7 days');
$color = array('red', 'blue', 'green', 'orange', 'yellow', 'purple', 'brown');
foreach ($arr as $key => $value) {
    $bar->addBar($key, $value, array_pop($color));
}
$bar->make();
$bar->makegif('graph.gif'); //Это позволит сохранить гистограмму в указанный GIF файл
?>
<img src="graph.gif">
<?php
echo "<br><h2>Horizontal histogram:</h2>";
$max = max($arr);
echo '<table>';
foreach ($arr as $k => $v) {
    echo "<tr><td>$k</td><td><img src='bar.php?max=$max&val=$v'> $v</td></tr>";
}
echo '</table>';
?>
</body>
</html>