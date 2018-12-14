<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | Concrete Builder 具體建造者
 |--------------------------------------
 |
 |
 */


namespace Src\Builder\basic;


class ConcreteBuilderB extends Builder
{

    private $product;

    public function __construct()
    {
        $this->product = new Product();
    }

    public function buildPartA()
    {
        $this->product->add('零件X');
    }

    public function buildPartB()
    {
        $this->product->add('零件Y');
    }

    public function getResult()
    {
        return $this->product;
    }
}