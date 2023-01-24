<?php

/**
 * Класс для создания объектов Сотрудник
 */
class Employee{
    public readonly string $name;
    public readonly int $age;
    public readonly string $number;
    public readonly string $post;
    public readonly int $salary;

    /**
     * Конструктор для создания объктов Сотрудник
     * @param $name
     * @param $age
     * @param $number
     * @param $post
     */
    function __construct($name, $age, $number="000", $post="Сотрудник"){
        $this->name=$name;
        $this->age=$age;
        $this->number=$number;
        $this->post=$post;
    }

    /**
     * Метод, устанавливающий зарплату для конкретного сотрудника
     * @param $salary
     * @return void
     */
    public function setSalary($salary){
        $this->salary=$salary;
    }
}
