<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | 皮鞋 ConcreteDecorator
 |--------------------------------------
 |
 |
 */


namespace Src\Decorator\example;


class LeatherShoes extends Finery
{
    public function show()
    {
        echo '皮鞋 ';
        parent::show();
    }
}