<?php
include "employee.php";
include "manager.php";
include "salary.php";
include "salaryreport.php";
/**
 * Пример использования классов Employee и Manager
 * @example
 */
$Tom=new Employee("Tom",20,"123");
$Lina = new Employee("Lina",18,"789");
$Robert = new Employee("Robert", 30,"321");
$David = new Employee("David",31,"102");
$Paul = new Employee("Paul", 32,"103");
$Jack=new Manager("Jack", 78, "222", array($Tom,$Robert));
$John=new Manager("John",28, "745", array($Lina,$David,$Paul,$Jack));
/**
 * Пример импользования классов ManagerSalary и EmployeeSalary
 * @example
 */
$John->setSalary(ManagerSalary::total_hours(120));
$Tom->setSalary(EmployeeSalary::stable());
$Lina->setSalary(EmployeeSalary::total_hours(100));
$Jack->setSalary(ManagerSalary::stable());
$Robert->setSalary(EmployeeSalary::stable());
$David->setSalary(EmployeeSalary::total_hours(20));
$Paul->setSalary(EmployeeSalary::total_hours(30));

/**
 * Пример использования класса SalaryReport
 * @example
 */
$Report = new SalaryReport($John);

