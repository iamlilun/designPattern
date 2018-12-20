<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | A產品 AbstractProduct
 |--------------------------------------
 | 抽象產品，有可能有兩種以上不同的實現
 |
 */


namespace Src\AbstractFactory\basic;


abstract class AbstractProductA
{
    /**
     * 製作產品A
     * @return mixed
     */
    abstract public function ProductA();
}