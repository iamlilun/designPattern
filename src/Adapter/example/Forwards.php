<?php
declare(strict_types=1);
/*------------------------------------
 | 前鋒 Target
 |------------------------------------
 |
 |
 |
 */

namespace Src\Adapter\example;


class Forwards extends Player
{

    public function attack()
    {
        echo "前鋒 {$this->name} 進攻\n";
    }

    public function defense()
    {
        echo "前鋒 {$this->name} 防守\n";
    }
}