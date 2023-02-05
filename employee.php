<?php
/**
 * Class for creating Employee objects
 */
class Employee
{
    public readonly string $name;
    public readonly int $age;
    public readonly string $number;
    public readonly string $post;
    public readonly int $salary;

    /**
     * Constructor for creating objects Employee
     * @param string $name
     * @param int $age
     * @param string $number
     * @param string $post
     */
    public function __construct(string $name, int $age, string $number = "000",  string $post = "Сотрудник")
    {
        $this->name = $name;
        $this->age = $age;
        $this->number = $number;
        $this->post = $post;
    }

    /**
     * A method that sets the salary for a specific employee
     * @param int $salary
     * @return void
     */
    public function setSalary(int $salary)
    {
        $this->salary = $salary;
    }
}
