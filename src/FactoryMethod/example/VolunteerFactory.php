<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | 社區義工工廠 ConcreteCreator
 |--------------------------------------
 |
 |
 */


namespace Src\FactoryMethod\example;


class VolunteerFactory implements IFactory
{

    public function createNightingale()
    {
        return new Volunteer();
    }
}