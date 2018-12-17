<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | Subject 抽象通知者
 |--------------------------------------
 |
 |
 */


namespace Src\Observer\basic;


abstract class Subject
{
    /** @var array : 觀查者 */
    private $observers = [];

    /**
     * 增加觀查者
     * @param Observer $observer
     */
    public function attach(Observer $observer)
    {
        $this->observers[] = $observer;
    }

    /**
     * 移除觀查者
     * @param Observer $observer
     */
    public function detach(Observer $observer)
    {
        $key = array_search($observer, $this->observers);
        if($observer === $this->observers[$key]){
            unset($this->observers[$key]);
        }
    }

    /**
     * 通知
     */
    public function notify()
    {
        foreach($this->observers as $v){
            $v->update();
        }
    }
}
