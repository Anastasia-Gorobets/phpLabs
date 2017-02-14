<?php
class LabInfo
{
    public function printInfo($number,$subject,$date,$task){
        echo "<p>Лабораторна робота  № $number</p>";
        echo "<p>Тема: $subject</p>";
        echo "<p>Дата: $date</p>";
        echo "<p>Завдання: $task</p>";
        echo "<p>Горобець  Анастасія Олександрівна, КІТ22Б</p>";
    }
}