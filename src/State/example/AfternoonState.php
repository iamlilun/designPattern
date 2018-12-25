<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | 下午的工作狀態 ConcreteStatus
 |--------------------------------------
 |
 |
 */


namespace Src\State\example;


class AfternoonState extends State
{

    public function writeProgram(Work $work)
    {
        if($work->hour < 17){
            echo "當前時間：{$work->hour}點 下午狀態不錯\n";
        } else {
            //超過下午17點，則轉入傍晚工作狀態
            $work->setState(new EveningState());
            $work->writeProgram();
        }
    }
}