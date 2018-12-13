<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | 建造指揮者
 |--------------------------------------
 |
 |
 */


namespace Src\Builder\example;


class Director
{
    public function construct(Builder $builder)
    {
        $builder->setName();
        $builder->setSex();
        $builder->setWearing();
    }
}