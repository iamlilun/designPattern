<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | 裝飾抽象類別
 |--------------------------------------
 | 繼承Component，從外類別來擴展Component..
 | 但對Component來說,不需要知道有這個類別的存在
 |
 */


namespace Src\Decorator\basic;


abstract class Decorator extends Component
{
    protected $component;

    /**
     * set component
     * @param Component $component
     */
    public function setComponent(Component $component)
    {
        $this->component = $component;
    }

    /**
     * 實際執行的是Component的operation
     */
    public function operation()
    {
        if($this->component !== null){
            $this->component->operation();
        }
    }
}