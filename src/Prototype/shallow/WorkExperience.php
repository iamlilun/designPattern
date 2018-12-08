<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | 工作經歷
 |--------------------------------------
 | 在這範例中並不會因為Resume被Clone而跟著被複製
 |
 */


namespace Src\Prototype\shallow;


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
}