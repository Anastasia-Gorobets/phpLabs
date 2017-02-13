<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab5</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<?php
require_once 'TextProcessing.php';
require_once '../lab4/LabInfo.php';
$labInfo=new LabInfo();
$labInfo->printInfo(5,"Рядки","02-13-2017","Порахувати кількість рядків та слів в тексті");
$str="Специфіка порівнянь строк у PHP також є досить суттєвим місцем для потенційних багів. При використанні оператора порівняння у стилі С «==» виконується спроба перетворити тип до цілочислового аргументу і виконати порівняння. Лише якщо дві змінні мають строковий тип їх значення порівнюються як строки. Таким чином, абсолютно дві різні строки дадуть у результаті 1 (якщо бути зовсім чесними, то строки не такі вже й різні).";
$textProcessing=new TextProcessing($str);
$textProcessing->printInfo();
?>
</body>
</html>






