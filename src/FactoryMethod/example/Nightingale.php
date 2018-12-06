<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | 南丁格爾 Product
 |--------------------------------------
 |
 |
 */


namespace Src\FactoryMethod\example;


class Nightingale
{
    public function sweep()
    {
        echo "掃地\n";
    }

    public function wash()
    {
        echo "洗衣\n";
    }

    public function buyRice()
    {
        echo "買米\n";
    }
}