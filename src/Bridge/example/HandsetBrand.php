<?php
declare(strict_types=1);
/*------------------------------------
 | 手機品牌抽象
 |------------------------------------
 |
 |
 |
 */

namespace Src\Bridge\example;


abstract class HandsetBrand
{
    protected $soft;

    public function setHandsetSoft(HandsetSoft $handsetSoft)
    {
        $this->soft = $handsetSoft;
    }

    abstract public function run();
}