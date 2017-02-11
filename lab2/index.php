<?php
/*Знайти в масиві, створеному динамічно, номер елемента, який більше, ніж середнє арифметичне цього масиву
 * Лабораторна робота  №2
 * Горобець  Анастасія  Олександрівна
 * КІТ 22Б
 * 02.11.2017
 */
function searchNumber($arr){
    $average=array_sum($arr)/count($arr);
    echo "Average:$average<br>";
    foreach ($arr as $key=>$a){
        if ($a>$average)echo "Number:$key<br>";
    }
}
$arr=[1,2,3,4,5];
searchNumber($arr);

