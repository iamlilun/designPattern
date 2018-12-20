<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | 產品A實作 Product
 |--------------------------------------
 |
 |
 */


namespace Src\AbstractFactory\basic;


class ProductA1 extends AbstractProductA
{

    /**
     * 手工製作產品A
     * @return void
     */
    public function ProductA()
    {
        echo '手工產品A' . PHP_EOL;
    }
}