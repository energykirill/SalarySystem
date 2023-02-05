<?php
include "employee.php";
include "manager.php";
include "hourlysalary.php";
include "stablesalary.php";
include "salaryreport.php";
/**
 * Example of using the Employee and Manager classes
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
 * Example of using the ManagerSalary and EmployeeSalary classes
 * @example
 */
$John->setSalary(HourlySalary::total_hours(120));
$Tom->setSalary(StableSalary::total_stable());
$Lina->setSalary(HourlySalary::total_hours(100));
$Jack->setSalary(StableSalary::total_stable());
$Robert->setSalary(StableSalary::total_stable());
$David->setSalary(HourlySalary::total_hours(20));
$Paul->setSalary(HourlySalary::total_hours(30));
/**
 * Example of using the SalaryReport class
 * @example
 */
$Report = new SalaryReport(array($John,$Tom,$Lina,$Jack,$Robert,$David,$Paul));
$Report->get_report();


