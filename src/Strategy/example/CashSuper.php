<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | 現金收取的抽象類別
 |--------------------------------------
 |
 |
 */


namespace Src\Strategy\Example;


abstract class CashSuper
{
    /**
     * 收取現金的抽象方法
     * @param double $money: 原價
     * @return double : 現價
     */
    abstract public function acceptCash(float $money);
}