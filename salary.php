<?php

/**
 * Интерфейс, показывающий какие типы расчёта нужно реализовать
 */
interface IMethods{
    public static function total_hours ($hours);
    public static function stable ();
}

/**
 * Класс, расчитывающий ЗП для Сотрудника
 */
class EmployeeSalary implements IMethods {
    /**
     * Метод для расчёта почасовой ЗП
     * @param $hours
     * @return int
     */
    public static function total_hours ($hours):int{
        return $hours*50;
    }

    /**
     * Метод для расчёта окладной ЗП
     * @return int
     */
    public static function stable ():int{
        return 25000;
    }
}

/**
 * Класс, расчитывающий ЗП для Менеджера
 */
class ManagerSalary implements IMethods {
    /**
     * Метод для расчёта почасовой ЗП
     * @param $hours
     * @return int
     */
    public static function total_hours($hours):int{
        return $hours*80;
    }

    /**
     * Метод для расчёта окладной ЗП
     * @return int
     */
    public static function stable():int{
        return 30000;
    }
}