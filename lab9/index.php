<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab9</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<?php
/*
 * Проверить наличие на FTP-сервере директории TEST. Если она отсутствует, то создать ее, иначе – удалить
 */
require_once '../lab4/LabInfo.php';
$labInfo=new LabInfo();
$labInfo->printInfo(9,"FTP","02-19-2017","Перевірити наявність на ftp сервері папки TEST. Якщо вона існує,то видалили її, якщо ні - створити");
$host="s52.ucoz.net";
$handle= ftp_connect($host);
if($handle){
    $name="2nastya-gorobets";
    $password="nastya2410";
    $login=ftp_login($handle,$name,$password);
    if($login){
        $folder_exists = is_dir('ftp://'.$name.':'.$password.'@'.$host.'/TEST');
        if($folder_exists){
            echo "<p class='result'>Folder TEST is exist. Will remove it</p>";
            ftp_rmdir($handle,"TEST");
        }else{
            echo "<p class='result'>Folder TEST is not exist. Will create it</p>";
            ftp_mkdir($handle,"TEST");
        }
    }else{
        echo "<p class='error'>Cannot login with name: $name and password: $password<br> </p> ";
    }

    ftp_close($handle);
}else{
    echo "<p class='error'>Cannot connect to ftp server with host $host <br></p>";
}
?>
</body>
</html>









