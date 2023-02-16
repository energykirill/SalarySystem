<?php
include 'IManager.php';

/**
 * Class for creating Manager objects
 */
class Manager extends Employee implements IManager
{
    private array $state;

    /**
     * Constructor for creating objects Manager
     * @param string $name
     * @param int $age
     * @param string $number
     * @param int $hourswork
     * @param array $state
     */
    public function __construct(string $name, int $age, string $number, array $state, int $hourswork = 0)
    {
        parent::__construct($name, $age, $number, $hourswork ,"Менеджер");
        $this->state = $state;
    }

    /**
     * A method that returns the staff attached to this manager
     * @return array
     */
    public function getState(): array
    {
        return $this->state;
    }

    /**
     * The method that adds an employee to the staff
     * @param $people
     * @return void
     */
    public function add_State($people)
    {
        array_push($this->state, $people);
    }
}
