<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | 工作 Context
 |--------------------------------------
 |
 |
 */


namespace Src\State\example;


class Work
{
    private $current; //狀態
    private $hour; //鐘點，狀態轉換的依據
    private $finish = false; //任務是否完成，能否下班的依據

    public function __construct()
    {
         //初使化為上午工作狀態，即上午9點開始上班
        $this->current = new ForenoonState();
    }

    public function __get($name)
    {
        return $this->$name ?? null;
    }

    public function __set($name, $value)
    {
        $attr = ['current', 'hour', 'finish'];
        if(in_array($name, $attr)){
            $this->$name = $value;
        }
    }

    public function setState(State $state)
    {
        $this->current = $state;
    }

    public function writeProgram()
    {
        $this->current->writeProgram($this);
    }
}