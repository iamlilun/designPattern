<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | 領帶 ConcreteDecorator
 |--------------------------------------
 |
 |
 */


namespace Src\Decorator\example;


class Tie extends Finery
{
    public function show()
    {
        echo '領帶 ';
        parent::show();
    }
}