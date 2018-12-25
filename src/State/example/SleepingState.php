<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | 睡眠工作狀態 ConcreteStatus
 |--------------------------------------
 |
 |
 */


namespace Src\State\example;


class SleepingState extends State
{

    public function writeProgram(Work $work)
    {
        echo "當前時間：{$work->hour}點 不行了，睡著了\n";
    }
}