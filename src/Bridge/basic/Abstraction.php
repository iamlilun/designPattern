<?php
declare(strict_types=1);
/*------------------------------------
 | 抽象類
 |------------------------------------
 | 要聚合 Implementor 的功能抽象
 |
 |
 */

namespace Src\Bridge\basic;


class Abstraction
{
    protected $implementor;


    public function setImplementor(Implementor $implementor)
    {
        $this->implementor = $implementor;
    }

    public function operation()
    {
        $this->implementor->operation();
    }
}