<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | 學南丁格爾的大學生工廠  ConcreteCreator
 |--------------------------------------
 |
 |
 */


namespace Src\FactoryMethod\example;


class UndergraduateFactory implements IFactory
{

    public function createNightingale()
    {
        return new Undergraduate();
    }
}