<?php
declare(strict_types=1);
/*------------------------------------
 | 具體Flyweight
 |------------------------------------
 |
 |
 |
 */

namespace Src\Flyweight\basic;


class ConcreteFlyweight extends Flyweight
{
    public function operation($extrinsicstate)
    {
        echo "具體Flyweight: {$extrinsicstate}\n";
    }
}