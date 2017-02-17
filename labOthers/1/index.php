<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab</title>
</head>
<body>
<?php
/*
 * Изьять все email-адреса с текста
 */
$filename = "LR5_task05.htm";
$handle = fopen($filename, "r");
$contents = fread($handle, filesize($filename));
fclose($handle);
$contents=strip_tags($contents);
echo $contents;
echo "<br>";
$arr=preg_split('/[\s,;]/',$contents);
$reg="/^([A-z0-9]+\.?)+[A-z0-9]+(@([A-z0-9]+\.?)+[A-z0-9]+\.?)$/";
foreach ($arr as $a){
    if (strpos($a, '@') !== false) {
        if(preg_match_all($reg,$a)){
            if(substr($a, -1) == "."){
                $a[strlen($a)-1]="";
            }
            echo $a."<br>";
        }
    }
}
?>
</body>
</html>




