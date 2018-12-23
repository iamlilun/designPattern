<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | 使用者
 |--------------------------------------
 |
 |
 */


namespace Src\AbstractFactory\Reflection;


class User
{
    private $id;
    private $name;

    public function __get($name)
    {
        return $this->$name ?? '';
    }

    public function __set($name, $value)
    {
        $attr = ['id', 'name'];
        if(in_array($name, $attr)){
            $this->$name = $value;
        }
    }
}