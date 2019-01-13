<?php
declare(strict_types=1);
/*------------------------------------
 | 非終端運算式
 |------------------------------------
 |
 |
 |
 */

namespace Src\Interpreter\basic;


class NonTerminalExpression extends AbstractExpression
{

    public function interpret(Context $context)
    {
        echo "非終端解釋器\n";
    }
}