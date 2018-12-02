<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | 現金收取上下文
 |--------------------------------------
 |
 |
 */


namespace Src\Strategy\example;

use Src\Strategy\Example\CashFactory;

class CashContext
{
    /** @var CashSuper  */
    private $cashSuper;

    /**
     * CashContext constructor.
     * 初使化具體的收費策略
     * @param $type: 計算方式
     */
    public function __construct($type)
    {
        //結合簡單工廠模式
        $this->cashSuper = CashFactory::createCashAccept($type);
    }

    /**
     * 根據不同的收費策略，獲得計算結果
     * @param $money: 原價
     * @return float: 現價
     */
    public function getResult($money)
    {
        return $this->cashSuper->acceptCash($money);
    }

}