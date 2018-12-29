<?php
declare(strict_types=1);
/*------------------------------------
 | 角色狀態管理者 Caretaker
 |------------------------------------
 |
 |
 |
 */

namespace Src\Memento\example;


class RoleStateCaretaker
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