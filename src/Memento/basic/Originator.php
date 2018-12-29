<?php
declare(strict_types=1);
/*------------------------------------
 | 發起人
 |------------------------------------
 |
 |
 |
 */

namespace Src\Memento\basic;


class Originator
{
    /** @var : 需要保存的屬性 */
    private $state;

    public function __get($name)
    {
        return $this->state;
    }

    public function __set($name, $value)
    {
        $this->state = $value;
    }

    /**
     * 建立備忘錄
     * 將需要保存的資訊導入並實體他一個Memento物件
     * @return Memento
     */
    public function createMemento()
    {
        return new Memento($this->state);
    }

    /**
     * 恢復備忘錄
     * 將memento導入並將相關資料恢復
     * @param Memento $memento
     */
    public function setMemento(Memento $memento)
    {
        $this->state = $memento->state;
    }

    /**
     * 顯示資料
     */
    public function show()
    {
        echo "State=" . $this->state . PHP_EOL;
    }
}