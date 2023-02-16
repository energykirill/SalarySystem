<?php
interface IEmployee
{
    public function getName():string;
    public function getPost():string;
    public function getSalary():int;
    public function setSalary();
}