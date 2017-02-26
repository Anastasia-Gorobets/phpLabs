<!--
Прочитать содержимое файла. Если строка начинается с символа S, то вывести
 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab8</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<?php
    require_once '../lab4/LabInfo.php';
    $labInfo = new LabInfo();
    $labInfo->printInfo(8, "Файли", "02-19-2017", "Прочитати зміст файлу. Якщо рядок починається з S, то вивести його посимвольно");
    $exists = false;
    if (isset($_REQUEST['send'])) {
        $res = '';
        $filename = $_REQUEST['fileName'];
        $exists = file_exists($filename);
        if ($exists) {
            $file = fopen($filename, 'r');
            $buffer = [];
            while (!feof($file)) {
                $buffer[] = fgets($file);
            }

            foreach ($buffer as $buf) {
                if ($buf[0] === 'S') {
                    $split = implode(' ', str_split($buf));
                    $res .= $split . '<br>';
                }
            }

            $text = implode('<br>', $buffer);

            fclose($file);
        } else {
            echo "<span class='error'>$filename file  not found</span><br>";
        }
    }
?>
<form action="">
    <input type="text" name="fileName" id="fileName" placeholder="Enter file name">
    <input type="submit" id="send" name="send" value="Send">
</form>
<?php if ($exists) { ?>
    <div class="result">
        <span>Text in file :</span> <br> <?= $text ?> <br>
    </div>

    <div class="result">
        <span>Result is :</span> <br> <?= $res ?> <br>
    </div>
    <?php
} ?>
</body>
</html>
