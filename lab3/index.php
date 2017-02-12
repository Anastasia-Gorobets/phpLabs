<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab3</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<?php
require_once 'lab3.inc';
$func="swapMaxMinInArray";
$res1=$func();
$res2=$func("Text");
$res3=$func([1,2,3,4,2,55,7]);
echo "<h2>Output for swapMaxMinInArray()</h2>";
echo '<div class="res">'.$res1.'</div>';
echo "<h2>Output for swapMaxMinInArray('Text')</h2>";
echo '<div class="res">'.$res2.'</div>';
echo "<h2>Output for swapMaxMinInArray([1,2,3,4,2,55,7])</h2>";
foreach ($res3 as $r3){?>
    <ul>
        <li><?= $r3 ?></li>
    </ul>
  <?php
}
?>
</body>
</html>



