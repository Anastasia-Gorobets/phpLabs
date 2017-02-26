<?php
    require_once '../lab4/LabInfo.php';
    $labInfo = new LabInfo();
    echo $labInfo->getInfo(14, "Работа с графикой", "22-02-2017", "Вивести графік з табличних даних");
    require_once 'image.php';
    $image = new Image();
    $src = 'res.png';
    $image->create('res.png');
?>
<img src="<?php echo $src;?>">