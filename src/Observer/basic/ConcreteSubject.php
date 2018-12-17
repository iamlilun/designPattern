<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | ConcreteSubject 具體通知者
 |--------------------------------------
 | 當狀態改變時，給所有觀查者發出通知
 |
 */


namespace Src\Observer\basic;


class ConcreteSubject extends Subject
{
    /** @var :具體觀查者狀態 */
    private $subjectStatus;

    /*-------------------------
     | subjectStatus 的 get 跟 set
     |-------------------------
     |
     */
    public function __set($name, $value)
    {
        if($name == 'subjectStatus'){
            $this->subjectStatus = $value;
        }
    }

    public function __get($name)
    {
        if ($name == 'subjectStatus') {
            return $this->subjectStatus;
        }
        return '';
    }
}