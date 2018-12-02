<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | 具體裝飾物件
 |--------------------------------------
 | 發揮為Component加入職責的功能
 |
 */


namespace Src\Decorator\basic;


class ConcreteDecoratorA extends Decorator
{
    private $addedState;

    /**
     * @override
     */
    public function operation()
    {
        //先執行Component的operation，再執行本類別的功能，相當於對原Component進行了裝飾
        parent::operation();

        $this->addedState = 'New State';

        echo "具體裝飾物件A的操作\n";
    }
}