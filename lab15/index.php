<?php
require_once '../lab4/LabInfo.php';
$labINfo = new LabInfo();
$labINfo->printInfo(15, "XML", "25-02-2017", "Прочитать xml файл, вывести его содержимое.
Добавить дочерний элемент. Вывести дочерние элементы конкретного узла");
function printXML($xml)
{
    foreach ($xml->children() as $bikes) {
        echo $bikes->getName() . " : ";
        foreach ($bikes->children() as $childs) {
            echo $childs->getName() . "=" . $childs . " ";
        }
        echo "<br>";
    }
}

$xml = simplexml_load_file("bike.xml") or die('Cannot load file');
printXML($xml);
//add child element
$childBike = $xml->addChild("bike");
$childBike->addChild("model", "Child model");
$childBike->addChild("speedNumber", 2);
$childBike->addChild("sizes", 290);
$childBike->addChild("amount", 20);
echo "After adding child elements:<br><br>";
printXML($xml);
echo "<br>Child elements for bike[2]:<br>";
foreach ($xml->bike[2]->children() as $bikes) {
    echo $bikes->getName() . " = " . $bikes;
    echo "<br>";
}