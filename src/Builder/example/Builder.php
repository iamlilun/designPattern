<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | Builder
 |--------------------------------------
 |
 |
 */


namespace Src\Builder\example;


abstract class Builder
{
    /**
     * 設定姓名
     */
    abstract public function setName();

    /**
     * 設定性別
     */
    abstract public function setSex();

    /**
     * 設定穿著
     */
    abstract public function setWearing();

    /**
     * 取得角色
     */
    abstract public function getPerson();
}