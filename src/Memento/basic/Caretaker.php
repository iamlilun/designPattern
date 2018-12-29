<?php
declare(strict_types=1);
/*------------------------------------
 | 管理者
 |------------------------------------
 |
 |
 |
 */

namespace Src\Memento\basic;


class Caretaker
{
    private $memento;

    public function __get($name)
    {
        return $this->memento;
    }

    public function __set($name, $value)
    {
        $this->memento = $value;
    }
}