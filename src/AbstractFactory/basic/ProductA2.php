<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | 產品A實 Product
 |--------------------------------------
 |
 |
 */


namespace Src\AbstractFactory\basic;


class ProductA2 extends AbstractProductA
{

    /**
     * 機器製作產品A
     * @return void
     */
    public function ProductA()
    {
        echo '機器產品A' . PHP_EOL;
    }
}