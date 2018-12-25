<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | 上午和中午的工作狀態 ConcreteStatus
 |--------------------------------------
 |
 |
 */


namespace Src\State\example;


class ForenoonState extends State
{

    public function writeProgram(Work $work)
    {
        if($work->hour < 12){
            echo "當前時間：{$work->hour}點 上午工作，精神百倍\n";
        } else {
            //超過中午12點，則轉入中午工作狀態
            $work->setState(new NoonState());
            $work->writeProgram();
        }
    }
}