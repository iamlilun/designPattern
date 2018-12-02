<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | 正常收費計算公式
 |--------------------------------------
 |
 |
 */


namespace Src\Strategy\Example;


class CashNormal extends CashSuper
{
    /**
     * 正常收費，返回原價
     * @param double $money : 原價
     * @return double : 現價
     */
    public function acceptCash(float $money)
    {
        return $money;
    }
}