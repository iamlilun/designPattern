<?php
declare(strict_types=1);
/*------------------------------------
 | 備忘錄
 |------------------------------------
 |
 |
 |
 */

namespace Src\Memento\basic;


class Memento
{
    private $state;

    public function __construct($state)
    {
        $this->state = $state;
    }

    public function __get($name)
    {
        return $this->state;
    }
}