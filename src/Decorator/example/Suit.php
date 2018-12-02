<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | 西裝 ConcreteDecorator
 |--------------------------------------
 |
 |
 */


namespace Src\Decorator\example;


class Suit extends Finery
{
    public function show()
    {
        echo '西裝 ';
        parent::show();
    }
}