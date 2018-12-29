<?php
declare(strict_types=1);
/*------------------------------------
 | 轉接器
 |------------------------------------
 | 透過在內部包裝一個Adaptee物件，把原始介面
 | 轉換成目標
 |
 */

namespace Src\Adapter\basic;


class Adapter extends Target
{
    private $adaptee;

    public function __construct()
    {
        $this->adaptee = new Adaptee();
    }

    public function request()
    {
        //在request中實際執行Adaptee@specificRequest
        $this->adaptee->specificRequest();
    }
}