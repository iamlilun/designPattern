<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | ConcreteObserver 具體觀查者
 |--------------------------------------
 | 實現抽象的update功能，以便使本身的狀態跟通知者一樣
 |
 */


namespace Src\Observer\basic;


class ConcreteObserver extends Observer
{
    private $name;
    private $observerStatus;
    private $concreteSubject;

    /*-------------------------
     | concreteSubject 的 get 跟 set
     |-------------------------
     |
     */
    public function __get($name)
    {
        if($name == 'concreteSubject') {
            return $this->concreteSubject;
        }

        return '';
    }

    public function __set($name, $value)
    {
        if ($name == 'concreteSubject') {
            $this->concreteSubject = $value;
        }
    }

    public function __construct(ConcreteSubject $concreteSubject, $name)
    {
        $this->concreteSubject = $concreteSubject;
        $this->name = $name;
    }

    public function update()
    {
        $this->observerStatus = $this->concreteSubject->subjectStatus;

        echo "觀查者{$this->name}的新狀態是{$this->observerStatus}\n";
    }


}