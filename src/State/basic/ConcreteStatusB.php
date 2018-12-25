<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | 具體狀態
 |--------------------------------------
 | 對應 Context->state 的行為
 |
 */


namespace Src\State\basic;


class ConcreteStatusB extends State
{

    public function handle(Context $context)
    {
        $context->state = new ConcreteStatusA(); //設定下一個狀態是ConcreteStatusA
    }
}