<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | 手工工廠 ConcreteFactory
 |--------------------------------------
 | 建立具有特定實現的產品物件
 |
 */


namespace Src\AbstractFactory\basic;


class ConcreteFactory1 extends AbstractFactory
{

    /**
     * 手工建立產品A
     * @return mixed
     */
    public function crateProductA()
    {
        return new ProductA1();
    }

    /**
     * 手工建立產品B
     * @return mixed
     */
    public function crateProductB()
    {
        return new ProductB1();
    }
}