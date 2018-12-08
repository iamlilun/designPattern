<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | 工作經歷
 |--------------------------------------
 | 自己也加個clone的魔術方法讓上層call，以達到被複製的需求
 |
 */


namespace Src\Prototype\deep;


class WorkExperience
{
    private $workDate;
    private $company;

    public function __get($name)
    {
        if($name == 'workDate' || $name == 'company') {
            return $this->$name;
        }
        return '';
    }

    public function __set($name, $value)
    {
        if ($name == 'workDate' || $name == 'company') {
            $this->$name = $value;
        }
    }

    public function __clone()
    {

    }
}