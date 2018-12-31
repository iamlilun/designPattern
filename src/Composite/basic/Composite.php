<?php
declare(strict_types=1);
/*------------------------------------
 | 枝節點物件
 |------------------------------------
 | 用來儲存子部分
 |
 |
 */

namespace Src\Composite\basic;


class Composite extends Component
{
    private $children = [];


    public function add(Component $component)
    {
        $this->children[] = $component;
    }

    public function remove(Component $component)
    {
        $key = array_search($component, $this->children);
        if($component === $this->children[$key]){
            unset($this->children[$key]);
        }
    }

    /**
     * 顯示其枝節點名稱，並對其下級進行走遍
     * @param $depth
     */
    public function display($depth)
    {
        echo $this->turnString('-', $depth) . $this->name . PHP_EOL;

        foreach($this->children as $component){
            $component->display($depth + 2);
        }
    }
}