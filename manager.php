<?php

/**
 * Класс для создания объектов Менеджер
 */
class Manager extends Employee{
    private $state = array();

    /**
     * Конструктор для создания объектов Менеджер
     * @param $name
     * @param $age
     * @param $number
     * @param $state
     */
    function __construct($name, $age, $number, $state){
        parent::__construct($name, $age, $number, "Менеджер");
        $this->state=$state;
    }

    /**
     * Метод, возвращающий штат сотрудников, прикрепленный к данному менеджеру
     * @return array
     */
    public function getState():array{
        return $this->state;
    }

    /**
     * Метод, добавляющий в штат сотрудника
     * @param $people
     * @return void
     */
    public function add_State($people){
        array_push($this->state, $people);
    }
}
