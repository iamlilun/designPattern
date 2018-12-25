<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | 中午的工作狀態 ConcreteStatus
 |--------------------------------------
 |
 |
 */


namespace Src\State\example;


class NoonState extends State
{

    public function writeProgram(Work $work)
    {
        if($work->hour < 13){
            echo "當前時間：{$work->hour}點 餓了．午飯，覺得睏，午休\n";
        } else {
            //超過中午13點，則轉入下午工作狀態
            $work->setState(new AfternoonState());
            $work->writeProgram();
        }
    }
}