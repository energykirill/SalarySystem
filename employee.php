<?php

/**
 * Class for creating Employee objects
 */
class Employee{
    public readonly string $name;
    public readonly int $age;
    public readonly string $number;
    public readonly string $post;
    public readonly int $salary;

    /**
     * Constructor for creating objects Employee
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
     * A method that sets the salary for a specific employee
     * @param $salary
     * @return void
     */
    public function setSalary($salary){
        $this->salary=$salary;
    }
}
