<?php
declare(strict_types=1);
/*------------------------------------
 | 葉節點物件
 |------------------------------------
 | 葉節點沒有子節點（最尾端了）
 |
 |
 */

namespace Src\Composite\basic;


class Leaf extends Component
{

    /**
     * 葉節點沒有再增加分枝和樹葉，add跟remove就變得沒有意義
     * 但這樣做可以讓葉節點跟支節點共用同一介面
     * @param Component $component
     */
    public function add(Component $component)
    {
        echo "Cannot add to leaf\n";
    }

    public function remove(Component $component)
    {
        echo "Cannot remove to leaf\n";
    }

    public function display($depth)
    {
        echo $this->turnString('-', $depth) . $this->name . PHP_EOL;
    }
}