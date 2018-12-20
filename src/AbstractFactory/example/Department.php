<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | 部門
 |--------------------------------------
 |
 |
 */


namespace Src\AbstractFactory\example;


class Department
{
    private $id;
    private $deptName;

    public function __get($name)
    {
        return $this->$name ?? '';
    }

    public function __set($name, $value)
    {
        $attr = ['id', 'deptName'];
        if(in_array($name, $attr)){
            $this->$name = $value;
        }
    }
}