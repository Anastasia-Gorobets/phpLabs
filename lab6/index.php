<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab6</title>
    <link rel="stylesheet" href="../lab5/css/main.css">
</head>
<body>
<?php
require_once '../lab4/LabInfo.php';
$labInfo=new LabInfo();
$labInfo->printInfo(6,"Регулярні вирази","02-14-2017","Перевірити правильність email адреси для домену 
 otp.khpi.ua");
$str1="test@otp.khpi.ua";
$str2="test2@otp.khpi.ua";
$str3="@otp.kphi.ua";
$str4="email4_@otp.khpi.ua";
$reg="/^[A-z0-9_]+(@otp.khpi.ua)$/";
$mat=[];
$count1=preg_match_all($reg,$str1);
$count2=preg_match_all($reg,$str2);
$count3=preg_match_all($reg,$str3);
$count4=preg_match_all($reg,$str4);
echo "Res1 for <span>$str1</span>=$count1<br> Res2 for <span>$str2</span>=$count2<br> Res3 for <span>$str3</span>=$count3<br> Res4 for <span>$str4</span>=$count4";
?>
</body>
</html>






