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
if(isset($_REQUEST['send'])){
    $text="";
    $res="";
    $filename=$_REQUEST['fileName'];
    if(file_exists($filename)){
        $file=fopen($filename,"r");

        $buffer=[];
        while(!feof($file))
            $buffer[]= fgets($file);

        foreach ($buffer as $buf){
            $text.=$buf."<br>";
            if($buf[0] == "S"){
                $arr=str_split($buf);
                foreach ($arr as $a){
                    $res.=$a."  ";
                }
                $res.="<br>";
            }
        }
        $res="<span>Result is :</span> <br> $res <br>";
        $text="<span>Text in file :</span> <br> $text  <br>";

        fclose($file);
    }else {
        echo "<span class='error'>$filename file  not found</span><br>";
    }
}
?>
<form action="">
    <input type="text" name="fileName" id="fileName" placeholder="Enter file name">
    <input type="submit" id="send" name="send" value="Send">
</form>

<?php if (!empty($text) && !empty($res)){?>
    <div class="result">
    <?= $text ?>
      </div>

<div class="result">
    <?= $res ?>
</div>
  <?php
}?>




</body>
</html>









