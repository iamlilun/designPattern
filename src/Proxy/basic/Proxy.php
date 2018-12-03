<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | Proxy
 |--------------------------------------
 | 保存一個參考來使得代理可以存取實體，並提供一個與
 | Subject相同的介面，這樣代理就能夠代實體.
 |---------------------------
 | 師爺翻譯：就是在這裡new RealSubject()然後執行它的同名method
 |
 */


namespace Src\Proxy\basic;


class Proxy extends Subject
{
    /** @var RealSubject  */
    private $realSubject;

    /**
     * 先實例化要代理的Proxy
     * Proxy constructor.
     */
    public function __construct()
    {
        if(!$this->realSubject instanceof RealSubject){
            $this->realSubject = new RealSubject();
        }
    }

    /**
     * 執行實體的同名method以達到代理功能
     */
    public function request()
    {
        $this->realSubject->request();
    }
}