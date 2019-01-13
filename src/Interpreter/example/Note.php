<?php
declare(strict_types=1);
/*------------------------------------
 | 音符類別 TerminalExpression
 |------------------------------------
 |
 |
 |
 */

namespace Src\Interpreter\example;


class Note extends Expression
{

    public function execute($key, $value)
    {
        $note = "";

        switch ($key){
            case "C":
                $note = "1";
                break;
            case "D":
                $note = "2";
                break;
            case "E":
                $note = "3";
                break;
            case "F":
                $note = "4";
                break;
            case "G":
                $note = "5";
                break;
            case "A":
                $note = "6";
                break;
            case "B":
                $note = "7";
                break;
        }

        echo "{$note} ";
    }
}