<?php
declare(strict_types=1);
/*------------------------------------
 | 人 Element
 |------------------------------------
 |
 |
 |
 */

namespace Src\Visitor\example;


abstract class Person
{
    abstract public function accept(Action $visitor);
}