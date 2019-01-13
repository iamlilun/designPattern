<?php
declare(strict_types=1);
/*------------------------------------
 | 抽象網站 Flyweight
 |------------------------------------
 |
 |
 |
 */

namespace Src\Flyweight\example;


abstract class WebSite
{
    /**
     * 使用網站
     * @param User $user : 用戶物件
     */
    abstract public function use(User $user);
}