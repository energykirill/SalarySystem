<?php
/**
 * A class for creating a report containing the salary of employees
 */
class SalaryReport
{
    private array $state;

    /**
     * Constructor for creating a report
     * @param array $object
     */
    public function __construct(array $object)
    {
        $this->state=$object;
    }

    /**
     * Method for displaying the salary report
     * @return void
     */
    public function get_report()
    {
        foreach ($this->state as $person)
            echo "-$person->post Имя: $person->name,  Возраст: $person->age, Телефон: $person->number, Зарплата: $person->salary<br/>";
    }
}