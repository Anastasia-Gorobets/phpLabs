<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab4</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<?php
require_once 'Transport.php';
require_once 'ServiceStation.php';
require_once 'CatalogTransport.php';
require_once 'LabInfo.php';
$labInfo=new LabInfo();
$labInfo->printInfo(4,"Классы в языке PHP","02-13-2017","Транспортное средство, СТО, Каталог ТС (группировка по СТО)");
$service1=new ServiceStation('Service1','Address1');
$service2=new ServiceStation('Service2','Address2');
$t1=new Transport("t1",'type1',100,'carcase1','engine1','chassis1',$service1);
$t2=new Transport("t2",'type2',200,'carcase2','engine2','chassis2',$service1);
$t3=new Transport("t3",'type3',300,'carcase3','engine3','chassis3',$service2);
$catalog=new CatalogTransport();
$catalog->addTransport($t1);
$catalog->addTransport($t2);
$catalog->addTransport($t3);
$catalog->groupByService();
$catalog->showCatalog();
?>
</body>
</html>




