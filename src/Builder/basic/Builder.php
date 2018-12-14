<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | Builder 抽象建造者類別
 |--------------------------------------
 | 確定產品建造所需的方法
 | 最後再宣告一個得到建造結果的方法
 */


namespace Src\Builder\basic;


abstract class Builder
{
    abstract public function buildPartA();

    abstract public function buildPartB();

    abstract public function getResult();
}