<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | 下班休息狀態 ConcreteStatus
 |--------------------------------------
 |
 |
 */


namespace Src\State\example;


class RestState extends State
{

    public function writeProgram(Work $work)
    {
        echo "當前時間：{$work->hour}點 下班回家了\n";
    }
}