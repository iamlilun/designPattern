<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | 上下文
 |--------------------------------------
 | 注入ConcreteStatus類別，由他來設定目前的狀態
 |
 */


namespace Src\State\basic;


class Context
{
    private $state;

    public function __construct(State $state)
    {
        $this->state = $state;
    }

    public function __set($name, $value)
    {
        $this->state = $value;
        echo "當前狀態: " . get_class($this->state) . "\n";
    }

    public function request()
    {
        $this->state->handle($this);
    }
}