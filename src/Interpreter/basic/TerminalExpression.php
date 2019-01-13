<?php
declare(strict_types=1);
/*------------------------------------
 | 終端運算式
 |------------------------------------
 |
 |
 |
 */

namespace Src\Interpreter\basic;


class TerminalExpression extends AbstractExpression
{

    public function interpret(Context $context): void
    {
        echo "終端解譯器\n";
    }
}