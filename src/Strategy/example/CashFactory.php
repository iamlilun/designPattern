<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | 現金收費工廠
 |--------------------------------------
 | 負責實例化 class
 |
 */


namespace Src\Strategy\Example;


class CashFactory
{
    public static function createCashAccept($type)
    {
        $cs = null;

        switch ($type){
            case "正常收費":
                $cs = new CashNormal();
                break;
            case "滿300送100":
                $cs = new CashReturn(300, 100);
                break;
            case "打8折":
                $cs = new CashRebate(0.8);
                break;
        }

        return $cs;
    }
}