<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab7</title>
    <link rel="stylesheet" href="css/main.css">
    <script src="../js/jquery-3.1.1.js"></script>

    <script src="../js/jBox-0.4.7/jBox-0.4.7/Source/jBox.min.js"></script>
    <link href="../js/jBox-0.4.7/jBox-0.4.7/Source/jBox.css" rel="stylesheet">
</head>
<body>
<?php
require_once '../lab4/LabInfo.php';
$labInfo=new LabInfo();
$labInfo->printInfo("7","Робота з формами","02-17-2017","Розробити форму, яка обробляє введені користувачем дані. Пароль: від 7-ми до 10ти символів, має містити заголовну літеру. Логін не можна вводити двічі.");
if(isset($_REQUEST['submit'])){
    $password1=$_REQUEST['password'];
    $password2=$_REQUEST['password2'];
    $login=$_REQUEST['login'];
    if(empty($login) || empty($password2) || empty($password2)){
         echo "<div class='error'>You must fill all fields!</div><br>";
    }else{
        if($password1 ==  $password2){
            if($login == $password1){
                echo  "<div class='error'>Login must be one time!</div><br>";
            }else {
                $arr = str_split($password1);
                $numberCount = 0; //count of numbers
                $upperFlag = false; //flag for Upper symbol
                $countFlag = false; //count
                foreach ($arr as $a) {
                    if (is_numeric($a)) $numberCount++;
                    else {
                        if (strtoupper($a) == $a) {
                            $upperFlag = true;
                        }
                    }
                }
                $symbolCount = count($arr);
                if ($symbolCount > 7 && $symbolCount <= 10) $countFlag = true;
                if(!$numberCount) echo "<div class='error'>The password should consist of two digits at least</div><br>";
                if(!$upperFlag) echo "<div class='error'>The password should consist of one upper symbol at least</div><br>";
                if(!$countFlag) echo "<div class='error'>The password should consist of symbols between 7 and 10</div><br>";
                if ($numberCount >= 2 && $upperFlag && $countFlag) {
                    echo "<div class='correct'>All is correct!</div><br>";
                }
            }
        }else{
            echo "<div class='error'>The password must be the same</div><br>";
        }
    }


            }

?>




<form action="" method="get">
    <label for="login"><span class="star">* </span>Login:</label>
    <input type="text" name="login" id="name"><br>
    <label for="password"><span class="star">* </span>Password:</label>
    <input type="password" name="password"> <span class="tooltip" title="Password from 7 to 10 characters. Must be an uppercase character. And a couple of digits">?</span>
    <br>
    <label for="password2"><span class="star">* </span>Password2:</label>
    <input type="password" name="password2"> <span class="tooltip" title="The password must be the same as the password above">?</span><br><br>
    <input type="submit" name="submit" id="submit" value="Send">
</form>
<script>
    $(function() {

        new jBox('Tooltip', {
            attach: '.tooltip',
            adjustPosition: true
        });

        $("#passwordInfo").click(function () {


        });
    });
</script>
</body>
</html>






