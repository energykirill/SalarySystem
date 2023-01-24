<?php

/**
 * An interface showing which types of calculations need to be implemented
 */
interface IMethods{
    public static function total_hours ($hours);
    public static function stable ();
}

/**
 * A class that calculates salary for an Employee
 */
class EmployeeSalary implements IMethods {
    /**
     * Method for calculating hourly salary
     * @param $hours
     * @return int
     */
    public static function total_hours ($hours):int{
        return $hours*50;
    }

    /**
     * Method for calculating the stable salary
     * @return int
     */
    public static function stable ():int{
        return 25000;
    }
}

/**
 * A class that calculates salary for a Manager
 */
class ManagerSalary implements IMethods {
    /**
     * Method for calculating hourly salary
     * @param $hours
     * @return int
     */
    public static function total_hours($hours):int{
        return $hours*80;
    }

    /**
     * Method for calculating the stable salary
     * @return int
     */
    public static function stable():int{
        return 30000;
    }
}