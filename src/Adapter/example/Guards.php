<?php
declare(strict_types=1);
/*------------------------------------
 | 後衛 Target
 |------------------------------------
 |
 |
 |
 */

namespace Src\Adapter\example;


class Guards extends Player
{

    public function attack()
    {
        echo "後衛 {$this->name} 進攻\n";
    }

    public function defense()
    {
        echo "後衛 {$this->name} 防守\n";
    }
}