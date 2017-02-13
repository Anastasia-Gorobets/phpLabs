<?php
class LabInfo
{
    public function printInfo($number,$subject,$date,$task){
        echo "<p>Лабораторная работа № $number</p>";
        echo "<p>Тема: $subject</p>";
        echo "<p>Дата: $date</p>";
        echo "<p>Задание: $task</p>";
        echo "<p>Горобец Анастасия Александровна, КИТ 22Б</p>";
    }
}