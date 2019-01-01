<?php
declare(strict_types=1);
/*------------------------------------
 | 具體實現類
 |------------------------------------
 |
 |
 |
 */

namespace Src\Bridge\basic;


class ConcreteImplementorB extends Implementor
{

    public function operation()
    {
        echo "具體實現B的方法執行\n";
    }
}