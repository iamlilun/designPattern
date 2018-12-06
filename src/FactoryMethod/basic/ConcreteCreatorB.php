<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | ConcreteCreator
 |--------------------------------------
 | 重定義工廠方法返回一個ConcreteProduct實例
 |
 */


namespace Src\FactoryMethod\basic;


class ConcreteCreatorB implements Creator
{

    public function factoryMethod()
    {
        return new ConcreteProductB();
    }
}