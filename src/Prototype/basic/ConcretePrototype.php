<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | ConcretePrototype
 |--------------------------------------
 | 具體原型類別，實現一個複製自身的操作
 |
 */


namespace Src\Prototype\basic;


class ConcretePrototype extends Prototype
{

    public function __construct($id)
    {
        parent::__construct($id);
    }

    /**
     * PHP魔術方法
     * 建立物件的淺表副本
     * @return mixed
     */
    public function __clone()
    {
    }
}