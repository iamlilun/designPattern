<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | 傍晚的工作狀態 ConcreteStatus
 |--------------------------------------
 |
 |
 */


namespace Src\State\example;


class EveningState extends State
{

    public function writeProgram(Work $work)
    {
        if($work->finish){
            //如果工作完成，則進入下班狀態
            $work->setState(new RestState());
            $work->writeProgram();
        } else {
            if ($work->hour < 21) {
                echo "當前時間：{$work->hour}點 加班哦，疲累至極\n";
            } else {
                //超過晚上21點，則轉入睡眠工作狀態
                $work->setState(new SleepingState());
                $work->writeProgram();
            }
        }


    }
}