<?php
declare(strict_types=1);
/*------------------------------------
 | 抽象運算式
 |------------------------------------
 |
 |
 |
 */

namespace Src\Interpreter\basic;


abstract class AbstractExpression
{
    abstract public function interpret(Context $context);
}