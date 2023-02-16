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
$Tom=new Employee("Tom",20,"123", 20);
$Lina = new Employee("Lina",18,"789",30);
$Robert = new Employee("Robert", 30,"321");
$David = new Employee("David",31,"102");
$Paul = new Employee("Paul", 32,"103",10);
$Jack=new Manager("Jack", 78, "222" ,array($Tom,$Robert), 40);
$John=new Manager("John",28, "745", array($Lina,$David,$Paul,$Jack));
/**
 * Example of using the ManagerSalary and EmployeeSalary classes
 * @example
 */
$John->setSalary();
$Tom->setSalary();
$Lina->setSalary();
$Jack->setSalary();
$Robert->setSalary();
$David->setSalary();
$Paul->setSalary();
/**
 * Example of using the SalaryReport class
 * @example
 */
$Report = new SalaryReport(array($John,$Tom,$Lina,$Jack,$Robert,$David,$Paul));
$Report->get_report();


