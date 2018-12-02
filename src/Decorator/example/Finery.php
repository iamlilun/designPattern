<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | 服飾 Decorator
 |--------------------------------------
 |
 |
 */


namespace Src\Decorator\example;


class Finery
{
    protected $component;

    /**
     * 由於省去了抽象Component..無法為$component指定type hide
     * @param $component
     */
    public function decorate($component)
    {
        if(is_object($component)) {
            $this->component = $component;
        }
    }

    /**
     * 實際執行的是Person的show
     */
    public function show()
    {
        if($this->component !== null){
            $this->component->show();
        }
    }
}