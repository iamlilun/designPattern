<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | 打折收費計算公式
 |--------------------------------------
 |
 |
 */


namespace Src\Strategy\Example;


class CashRebate extends CashSuper
{
    /** @var :打折率 */
    private $moneyRebate = 1.0;

    public function __construct($moneyRebate)
    {
        $this->moneyRebate = floatval($moneyRebate);
    }

    /**
     * 收取現金
     * @param double $money : 原價
     * @return double : 現價
     */
    public function acceptCash(float $money)
    {
        return $money * $this->moneyRebate;
    }
}