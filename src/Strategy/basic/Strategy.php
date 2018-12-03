<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | 策略類別
 |--------------------------------------
 | 定義所有支援之演算法的公共介面
 |
 */


namespace Src\Strategy\Basic;


abstract class Strategy
{
    abstract public function algorithmInterface();
}