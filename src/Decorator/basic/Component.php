<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | 定義一個物件介面
 |--------------------------------------
 | 可以給這些物件動態的加入職責
 |
 */


namespace Src\Decorator\basic;


abstract class Component
{
    abstract public function operation();

}