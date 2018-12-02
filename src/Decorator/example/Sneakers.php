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


class Sneakers extends Finery
{
    public function show()
    {
        echo '破球鞋 ';
        parent::show();
    }
}