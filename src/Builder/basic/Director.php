<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | Director 指揮者類別
 |--------------------------------------
 | 實作Builder介面的創造方法
 |
 */


namespace Src\Builder\basic;


class Director
{
    /**
     * 指揮建造過程
     * @param Builder $builder
     */
    public function construct(Builder $builder)
    {
        $builder->buildPartA();
        $builder->buildPartB();
    }
}