<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | Creator
 |--------------------------------------
 | 宣告工廠方法，該方法返回一個Product類型的物件
 |
 */


namespace Src\FactoryMethod\basic;


interface Creator
{
    public function factoryMethod();
}