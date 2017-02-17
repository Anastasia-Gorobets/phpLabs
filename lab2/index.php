<?php
/*Знайти в масиві, створеному динамічно, номер елемента, який більше, ніж середнє арифметичне цього масиву
 * Лабораторна робота  №2
 * Горобець  Анастасія  Олександрівна
 * КІТ 22Б
 * 02.11.2017
 */
function searchNumber($arr){
    $indexes=[];
    $average=array_sum($arr)/count($arr);
    echo "Average:$average<br>";
    foreach ($arr as $key=>$a){
        if ($a>$average)$indexes[]=$key;
    }
    return $indexes;
}
$arr=[1,2,3,4,5];
print_r(searchNumber($arr));

