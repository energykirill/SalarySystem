<?php

/**
 * A class for creating a report containing the salary of employees
 */
class SalaryReport
{
    /**
     * Constructor for creating a report
     * @param $object
     */
    function __construct($object){
        $state = $object->getState();
        echo "Менеджер Имя: $object->name,  Возраст: $object->age, Телефон: $object->number, Зарплата: $object->salary<br/>";
        foreach ($state as $person) {
            if ($person instanceof Manager) {
                echo "-";
                $this->__construct($person);
            }
            else echo "-$person->post Имя: $person->name,  Возраст: $person->age, Телефон: $person->number, Зарплата: $person->salary<br/>";
        }
    }
}