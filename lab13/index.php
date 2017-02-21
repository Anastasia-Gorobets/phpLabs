<?php
require_once 'PHPMailer-master/class.phpmailer.php';
require_once '../lab4/LabInfo.php';
$labInfo = new LabInfo();
$labInfo->printInfo(13, "Відправка email за допомогою PHP", "21-02-2017", "Написати програму, яка робить розсилку листів з вкладеними файлами на кілька email адрес. Використовувати відправку прихованих копій BCC");
$bodytext = "Hi,\n\nHow are you?";
$email = new PHPMailer();
$email->From = 'nastya.gorobets95@gmail.com';
$email->FromName = 'Nastya Gorobets';
$email->Subject = 'Message Subject';
$email->Body = $bodytext;
$email->AddAddress('alexandr.gorobets15@gmail.com');
$bccAddress = [
    "nastya.gorobets95@gmail.com" => "NG95",
    "n_g777@mail.ru" => "NG777"
];
foreach ($bccAddress as $address => $name) {
    $email->AddBCC($address, $name);
}
$filesToAttach = [
    'file.txt' => 'File1.txt',
    'imageFile.png' => 'Image'
];
foreach ($filesToAttach as $file => $name) {
    $email->AddAttachment($file, $name);

}
if ($email->Send()) {
    echo "Email sent successfully.";
} else {
    echo "Something is wrong with email sending. Check your data, please.";
}
