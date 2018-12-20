<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | 產品B實作 Product
 |--------------------------------------
 |
 |
 */


namespace Src\AbstractFactory\basic;


class ProductB1 extends AbstractProductB
{

    /**
     * 手工製作產品B
     * @return void
     */
    public function ProductB()
    {
        echo '手工產品B' . PHP_EOL;
    }
}