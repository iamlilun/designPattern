<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | Subject
 |--------------------------------------
 | 定義了RealSubject和Proxy的共用介面，
 | 這樣就在任何使用RealSubject的地方都能使用Proxy
 |
 */


namespace Src\Proxy\basic;


abstract class Subject
{
    abstract public function request();
}