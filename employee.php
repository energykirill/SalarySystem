<?php
include 'IEmployee.php';

/**
 * Class for creating Employee objects
 */
class Employee implements IEmployee
{
    private string $name;
    private int $age;
    private string $number;
    private string $post;
    private int $salary;
    private int $hourswork;


    /**
     * Constructor for creating objects Employee
     * @param string $name
     * @param int $age
     * @param string $number
     * @param string $post
     * @param int $hourswork
     */
    public function __construct(string $name, int $age, string $number = "000", int $hourswork = 0, string $post = "Сотрудник")
    {
        $this->name = $name;
        $this->age = $age;
        $this->number = $number;
        $this->hourswork=$hourswork;
        $this->post = $post;
    }

    /**
     * Getter Name
     * @return string
     */
    public function getName():string
    {
        return $this->name;
    }

    /**
     * Getter Post
     * @return string
     */
    public function getPost():string
    {
        return $this->post;
    }

    /**
     * Getter Salary
     * @return int
     */
    public function getSalary():int
    {
        return $this->salary;
    }

    /**
     * A method that sets the salary for a specific employee
     * @return void
     */
    public function setSalary()
    {
        if ($this->hourswork==0)
            $this->salary = StableSalary::total_stable();
        else
            $this->salary=HourlySalary::total_hours($this->hourswork);
    }
}
