<?php
declare(strict_types=1);
/*------------------------------------
 | 物件宣告介面
 |------------------------------------
 | 實現所有類別共有介面的預設行為
 |
 |
 */

namespace Src\Composite\Basic;


abstract class Component
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    abstract public function add(Component $component);

    abstract public function remove(Component $component);

    abstract public function display($depth);

    /**
     * 將數字轉換成字串
     * @param string $str: 要轉換的字串
     * @param int $length: 字串長度
     * @return string
     */
    protected function turnString(string $str, int $length): string
    {
        $res = '';

        for ($i = 0; $i < $length; $i++) {
            $res .= $str;
        }

        return $res;
    }
}