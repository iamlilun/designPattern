<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | Product
 |--------------------------------------
 | 定義工廠方法所建立的物件介
 |
 */


namespace Src\FactoryMethod\basic;


abstract class Product
{
    abstract public function makeProduct();
}