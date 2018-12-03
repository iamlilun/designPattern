<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | 被追求者
 |--------------------------------------
 |
 |
 */


namespace Src\Proxy\example;


class SchoolGirl
{
    private $name;

    public function __get($name)
    {
        return $this->name;
    }

    public function __set($name, $value)
    {
        $this->name = $value;
    }
}