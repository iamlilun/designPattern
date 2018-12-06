<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | ConcreteProduct
 |--------------------------------------
 | 具體的產品，實現了Product介面
 |
 */


namespace Src\FactoryMethod\basic;


class ConcreteProductB extends Product
{
    public function makeProduct()
    {
        echo "製造B\n";
    }
}