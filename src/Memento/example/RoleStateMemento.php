<?php
declare(strict_types=1);
/*------------------------------------
 | 角色狀態儲存箱 Memento
 |------------------------------------
 |
 |
 |
 */

namespace Src\Memento\example;


class RoleStateMemento
{
    /** @var : 生命力 */
    private $vitality;

    /** @var : 攻擊力 */
    private $attack;

    /** @var : 防禦力 */
    private $defense;

    public function __construct($vitality, $attack, $defense)
    {
        $this->vitality = $vitality;
        $this->attack = $attack;
        $this->defense = $defense;
    }

    public function __get($name)
    {
        return $this->$name;
    }

    public function __set($name, $value)
    {
        $attr = ['vitality', 'attack', 'defense'];
        if(in_array($name, $attr)){
            $this->$name = $value;
        }
    }
}