<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | 櫃台袐書 ConcreteSubject
 |--------------------------------------
 |
 |
 */


namespace Src\Observer\example;


class Secretary implements ISubject
{
    /** @var array : 同事列表 */
    private $observers = [];
    private $action;

    public function setAction($value)
    {
        $this->action = $value;
    }

    public function getAction()
    {
        $this->action;
    }

    public function attach(Observer $observer)
    {
        $this->observers[] = $observer;
    }

    public function detach(Observer $observer)
    {
        $key = array_search($observer, $this->observers);
        if ($observer === $this->observers[$key]) {
            unset($this->observers[$key]);
        }
    }

    /**
     * 通知
     */
    public function notify()
    {
        foreach ($this->observers as $v) {
            $v->update();
        }
    }

}