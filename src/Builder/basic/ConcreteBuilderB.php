<?php
declare(strict_types=1);
/*
 |--------------------------------------
 |
 |--------------------------------------
 |
 |
 */


namespace Src\Builder\basic;


class ConcreteBuilderA extends Builder
{

    private $product;

    public function __construct()
    {
        $this->product = new Product();
    }

    public function buildPartA()
    {
        $this->product->add('零件A');
    }

    public function buildPartB()
    {
        $this->product->add('零件B');
    }

    public function getResult()
    {
        return $this->product;
    }
}