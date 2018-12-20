<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | B產品 AbstractProduct
 |--------------------------------------
 | 抽象產品，有可能有兩種以上不同的實現
 |
 */


namespace Src\AbstractFactory\basic;


abstract class AbstractProductB
{
    /**
     * 製作產品B
     * @return mixed
     */
    abstract public function ProductB();
}