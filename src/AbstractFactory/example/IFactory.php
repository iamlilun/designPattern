<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | 抽象工廠 AbstractFactory
 |--------------------------------------
 |
 |
 */


namespace Src\AbstractFactory\example;


interface IFactory
{
    public function createUser();

    public function createDepartment();
}