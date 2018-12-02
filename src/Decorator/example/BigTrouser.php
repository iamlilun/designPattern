<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | 垮褲 ConcreteDecorator
 |--------------------------------------
 |
 |
 */


namespace Src\Decorator\example;


class BigTrouser extends Finery
{
    public function show()
    {
        echo '垮褲 ';
        parent::show();
    }
}