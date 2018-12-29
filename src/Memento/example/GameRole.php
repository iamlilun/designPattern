<?php
declare(strict_types=1);
/*------------------------------------
 | 遊戲角色 Originator
 |------------------------------------
 |
 |
 |
 */

namespace Src\Memento\example;


class GameRole
{
    /** @var : 生命力 */
    private $vitality;

    /** @var : 攻擊力 */
    private $attack;

    /** @var : 防禦力 */
    private $defense;

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

    /**
     * 狀態顯示
     */
    public function stateDisplay()
    {
        echo "角色當前狀態：\n";
         echo "體力：{$this->vitality}\n";
         echo "功擊力：{$this->attack}\n";
         echo "防禦力：{$this->defense}\n";
    }

    /**
     * 獲得初使狀態
     */
    public function getInitState()
    {
        $this->vitality = 100;
        $this->attack = 100;
        $this->defense = 100;
    }

    /**
     * 戰鬥
     */
    public function fight()
    {
        //打輸大魔王，所有數值都歸0
        $this->vitality = 0;
        $this->attack = 0;
        $this->defense = 0;
    }

    /**
     * 保存角色狀態
     */
    public function saveState()
    {
        return new RoleStateMemento($this->vitality, $this->attack, $this->defense);
    }

    /**
     * 恢復角色狀態
     * @param RoleStateMemento $roleStateMemento
     */
    public function recoveryState(RoleStateMemento $roleStateMemento)
    {
        $this->vitality = $roleStateMemento->vitality;
        $this->attack = $roleStateMemento->attack;
        $this->defense = $roleStateMemento->defense;
    }
}