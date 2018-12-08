<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | Prototype
 |--------------------------------------
 | 聲明一個複製自身的介面
 |
 */


namespace Src\Prototype\basic;


abstract class Prototype
{
    private $id;

    public function __construct($id)
    {
        $this->id = $id;
    }

    public function Id()
    {
        return $this->id;
    }

    /**
     * 抽象類別的關鍵，就是要提供一個clone的方法
     * @return mixed
     */
    abstract public function __clone();
}