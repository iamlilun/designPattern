<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | 抽象工廠介面
 |--------------------------------------
 | 方法應包含所有產品建立的抽象方法
 |
 */


namespace Src\AbstractFactory\basic;


abstract class AbstractFactory
{
    /**
     * 手工建立產品
     * @return mixed
     */
    abstract public function crateProductA();

    /**
     * 機器建立產品
     * @return mixed
     */
    abstract public function crateProductB();
}