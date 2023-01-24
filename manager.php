<?php

/**
 * Class for creating Manager objects
 */
class Manager extends Employee{
    private $state = array();

    /**
     * Constructor for creating objects Manager
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
     * A method that returns the staff attached to this manager
     * @return array
     */
    public function getState():array{
        return $this->state;
    }

    /**
     * The method that adds an employee to the staff
     * @param $people
     * @return void
     */
    public function add_State($people){
        array_push($this->state, $people);
    }
}
