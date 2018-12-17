<?php
declare(strict_types=1);
/*
 |--------------------------------------
 |
 |--------------------------------------
 |
 |
 */

namespace Src\Observer\example;

interface ISubject
{
    /**
     * 增加觀查者
     * @param Observer $observer
     */
    public function attach(Observer $observer);

    /**
     * 刪除觀查者
     * @param Observer $observer
     */
    public function detach(Observer $observer);

    /**
     * 通知
     */
    public function notify();
}