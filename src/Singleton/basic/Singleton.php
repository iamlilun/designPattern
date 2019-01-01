<?php
declare(strict_types=1);
/*------------------------------------
 | Singleton 類別
 |------------------------------------
 | 定義一個getInstance方法讓用戶
 |
 |
 */

namespace Src\Singleton\basic;


class Singleton
{
    private static $instance = null;

    /**
     * 用private 就堵死了外界利用 new 建立
     * Singleton constructor.
     */
    private function __construct()
    {
    }

    static public function getInstance()
    {
        if(self::$instance === null){
            self::$instance = new self();
        }
        return self::$instance;
    }
}