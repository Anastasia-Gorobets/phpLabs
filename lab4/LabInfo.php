<?php

class LabInfo
{
    /**
     * @param $number
     * @param $subject
     * @param $date
     * @param $task
     */
    public function printInfo($number, $subject, $date, $task)
    {
        echo $this->getInfo($number, $subject, $date, $task);
    }

    public function getInfo($number, $subject, $date, $task)
    {
        return "<p>Лабораторна робота  № $number</p>"
            . "<p>Тема: $subject</p>"
            . "<p>Дата: $date</p>"
            . "<p>Завдання: $task</p>"
            . "<p>Горобець  Анастасія Олександрівна, КІТ22Б</p>";
    }
}