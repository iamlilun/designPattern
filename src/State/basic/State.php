<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | 抽象狀態類
 |--------------------------------------
 |
 |
 */


namespace Src\State\basic;


abstract class State
{
    abstract public function handle(Context $context);
}