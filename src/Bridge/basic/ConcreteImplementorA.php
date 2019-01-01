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


class ConcreteImplementorA extends Implementor
{

    public function operation()
    {
        echo "具體實現A的方法執行\n";
    }
}