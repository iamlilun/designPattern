<?php
declare(strict_types=1);
/*------------------------------------
 |
 |------------------------------------
 |
 |
 |
 */

namespace Src\Bridge\basic;


class RefinedAbstraction extends Abstraction
{
    public function operation()
    {
       $this->implementor->operation();
    }
}