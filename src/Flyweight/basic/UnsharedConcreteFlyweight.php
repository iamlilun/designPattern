<?php
declare(strict_types=1);
/*------------------------------------
 | 不需要共用的Flyweight
 |------------------------------------
 |
 |
 |
 */

namespace Src\Flyweight\basic;


class UnsharedConcreteFlyweight extends Flyweight
{
    public function operation($extrinsicstate)
    {
        echo "不共用的具體Flyweight: {$extrinsicstate}\n";
    }
}