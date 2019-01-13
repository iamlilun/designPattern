<?php
declare(strict_types=1);
/*------------------------------------
 | 運算式類別 AbstractExpression
 |------------------------------------
 |
 |
 |
 */

namespace Src\Interpreter\example;


abstract class Expression
{
    public function interpret(PlayContext $context)
    {
        if(strlen($context->getPlayText()) == 0){
            return;
        } else {
            $playKey = substr($context->getPlayText(), 0, 1);
            $context->setPlayText(substr($context->getPlayText(), 2));
            $playValue = (double)substr(0, $this->getIndexOF($context, " "));
            $context->setPlayText(substr($context->getPlayText(), ($this->getIndexOF($context, " ") + 1)));
        }
        $this->execute($playKey, $playValue);
    }

    private function getIndexOF(PlayContext $context, $string){
        return Strrpos($context->getPlayText(), $string);
    }

    abstract public function execute($key, $value);
}