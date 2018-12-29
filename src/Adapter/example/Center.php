<?php
declare(strict_types=1);
/*------------------------------------
 | 中鋒 Target
 |------------------------------------
 |
 |
 |
 */

namespace Src\Adapter\example;


class Center extends Player
{

    public function attack()
    {
        echo "中鋒 {$this->name} 進攻\n";
    }

    public function defense()
    {
        echo "中鋒 {$this->name} 防守\n";
    }
}