<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | Observer 抽象觀察者
 |--------------------------------------
 | 通常包含一個update()方法，稱為更新方法
 |
 */


namespace Src\Observer\basic;


abstract class Observer
{
    abstract public function update();
}