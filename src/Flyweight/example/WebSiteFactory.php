<?php
declare(strict_types=1);
/*------------------------------------
 | 網站工廠類別
 |------------------------------------
 |
 |
 |
 */

namespace Src\Flyweight\example;


class WebSiteFactory
{
    private $flyweight;

    public function getWebsiteCategory($key): ConcreteWebSite
    {
        if(!$this->flyweight[$key]){ //如果物件不存在就先實例化
            $this->flyweight[$key] = new ConcreteWebSite($key);
        }
        return $this->flyweight[$key];
    }

    public function getWebSiteCount(): int
    {
        return count($this->flyweight);
    }
}