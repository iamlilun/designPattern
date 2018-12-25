<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | 抽象狀態
 |--------------------------------------
 |
 |
 */


namespace Src\State\example;


abstract class State
{
    abstract public function writeProgram(Work $work);
}