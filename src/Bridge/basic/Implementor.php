<?php
declare(strict_types=1);
/*------------------------------------
 | 實現抽象
 |------------------------------------
 | 要被合成或聚合的功能抽象
 |
 |
 */

namespace Src\Bridge\basic;


abstract class Implementor
{
    abstract public function operation();
}