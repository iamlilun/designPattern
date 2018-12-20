<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | Access工廠 ConcreteFactory
 |--------------------------------------
 |
 |
 */


namespace Src\AbstractFactory\example;


class AccessFactory implements IFactory
{

    public function createUser()
    {
        return new AccessUser();
    }

    public function createDepartment()
    {
        return new AccessDepartment();
    }
}