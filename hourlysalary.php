<?php
/**
 * A class that calculates hourly salary
 */
class HourlySalary {
    /**
     * Method for calculating hourly salary
     * @param $hours
     * @return int
     */
    public static function total_hours ($hours):int
    {
        return $hours*50;
    }
}