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


class Woman extends Person
{
    public function accept(Action $visitor)
    {
        $visitor->getWomanConclusion($this);
    }
}