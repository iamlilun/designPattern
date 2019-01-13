<?php
declare(strict_types=1);
/*------------------------------------
 | 音階類別 TerminalExpression
 |------------------------------------
 |
 |
 |
 */

namespace Src\Interpreter\example;


class Scale extends Expression
{

    public function execute($key, $value)
    {
        $scale = '';
        switch ((int)$value){
            case 1:
                $scale = "低音";
                break;
            case 2:
                $scale = "中音";
                break;
            case 3:
                $scale = "高音";
                break;
        }

        echo "{$scale} ";
    }
}