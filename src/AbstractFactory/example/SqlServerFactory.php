<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | SQL Server工廠 ConcreteFactory
 |--------------------------------------
 |
 |
 */


namespace Src\AbstractFactory\example;


class SqlServerFactory implements IFactory
{

    public function createUser()
    {
        return new SqlServerUser();
    }

    public function createDepartment()
    {
        return new SqlServerDepartment();
    }
}