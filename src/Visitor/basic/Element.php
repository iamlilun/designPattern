<?php
declare(strict_types=1);
/*------------------------------------
 | 抽象原素類
 |------------------------------------
 | 定義一個accept的操作，以一個訪問者為參數
 |
 |
 */

namespace Src\Visitor\basic;


abstract class Element
{
    abstract public function accept(Visitor $visitor);
}