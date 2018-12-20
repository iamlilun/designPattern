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


class ProductB2 extends AbstractProductB
{

    /**
     * 機器製作產品B
     * @return void
     */
    public function ProductB()
    {
        echo '機器產品B' . PHP_EOL;
    }
}