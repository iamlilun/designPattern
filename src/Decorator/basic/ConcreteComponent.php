<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | 定義一個具體物件
 |--------------------------------------
 | 可以給這物件加入一些職責
 |
 */


namespace Src\Decorator\basic;


class ConcreteComponent extends Component
{

    /**
     * 具體的職責..
     */
    public function operation()
    {
        echo "具體物件的操作\n";
    }
}