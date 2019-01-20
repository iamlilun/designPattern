<?php
declare(strict_types=1);
/*------------------------------------
 | 男人 ConcreteElement
 |------------------------------------
 |
 |
 |
 */

namespace Src\Visitor\example;


class Man extends Person
{
    public function accept(Action $visitor)
    {
        $visitor->getManConclusion($this);
    }
}