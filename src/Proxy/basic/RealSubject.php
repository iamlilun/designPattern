<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | RealSubject
 |--------------------------------------
 | 定義Proxy所代表的真實實體
 |
 */


namespace Src\Proxy\basic;


class RealSubject extends Subject
{

    public function request()
    {
        echo "真實的請求\n";
    }
}