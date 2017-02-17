<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab7</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<?php
require_once '../lab4/LabInfo.php';
$labInfo=new LabInfo();
$labInfo->printInfo("7","Робота з формами","02-17-2017","Розробити форму, яка обробляє введені користувачем дані. Пароль: від 7-ми до 10ти символів, має містити заголовну літеру. Логін не можна вводити двічі.");
if(isset($_REQUEST['submit'])){
    if($_REQUEST['password'] ==  $_REQUEST['password2']){
     $password=$_REQUEST['password'];
        $login=$_REQUEST['login'];
        if(empty($_COOKIE['login'])){
            setcookie('login',$login);
        }
         else {
             if ($login == $_COOKIE['login']) {
                 echo "<div class='error'>Login is busy</div><br>";
             }
            else{
                setcookie('login',$login);
                $arr=str_split($password);
                $numberCount=0; //count of numbers
                $upperFlag=false; //flag for Upper symbol
                $countFlag=false; //count
                foreach ($arr as $a){
                    if(is_numeric($a))$numberCount++;
                    else {
                        if(strtoupper($a) == $a) {
                            $upperFlag = true;
                        }
                    }
                }
                $symbolCount=count($arr);
                if($symbolCount>7 && $symbolCount<10)$countFlag=true;
                if($numberCount>=2 && $upperFlag && $countFlag) {
                    echo "<div class='correct'>All is correct!</div><br>";
                }
            }
            }
        } else{
        echo "<div class='error'>The password must be the same</div><br>";
    }
}
?>
<form action="" method="get">
    <label for="login">Login:</label>
    <input type="text" name="login" id="name"><br>
    <label for="password">Password:</label>
    <input type="password" name="password"><br>
    <label for="password2">Password2:</label>
    <input type="password" name="password2"><br><br>
    <input type="submit" name="submit" id="submit" value="Send">
</form>
</body>
</html>






