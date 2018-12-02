<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | 紅利收費計算公式
 |--------------------------------------
 |
 |
 */


namespace Src\SimpleFactory\example;


class CashReturn extends CashSuper
{
    /** @var float 紅利條件 */
    private $moneyCondition = 0.0;

    /** @var float 紅利值 */
    private $moneyReturn  = 0.0;

    public function __construct($moneyCondition, $moneyReturn)
    {
        $this->moneyCondition = floatval($moneyCondition);
        $this->moneyReturn = floatval($moneyReturn);
    }

    /**
     * 收取現金
     * @param double $money : 原價
     * @return double : 現價
     */
    public function acceptCash(float $money)
    {
        $result = $money;
        if($money >= $this->moneyCondition){ //條件符合
            $result = $money - floor($money / $this->moneyCondition) * $this->moneyReturn;
        }
        return $result;
    }
}