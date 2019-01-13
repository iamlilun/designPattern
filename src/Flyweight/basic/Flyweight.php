<?php
declare(strict_types=1);
/*------------------------------------
 | 抽象Flyweight
 |------------------------------------
 |
 |
 |
 */

namespace Src\Flyweight\basic;


abstract class Flyweight
{
    abstract public function operation($extrinsicstate);
}