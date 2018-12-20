<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | 機器工廠 ConcreteFactory
 |--------------------------------------
 | 建立具有特定實現的產品物件
 |
 */


namespace Src\AbstractFactory\basic;


class ConcreteFactory2 extends AbstractFactory
{

    /**
     * 機器建立產品A
     * @return mixed
     */
    public function crateProductA()
    {
        return new ProductA2();
    }

    /**
     * 機器建立產品B
     * @return mixed
     */
    public function crateProductB()
    {
        return new ProductB2();
    }
}