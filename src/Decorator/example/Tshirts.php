<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | T恤 ConcreteDecorator
 |--------------------------------------
 |
 |
 */


namespace Src\Decorator\example;


class TShirts extends Finery
{
    public function show()
    {
        echo '大T恤 ';
        parent::show();
    }
}