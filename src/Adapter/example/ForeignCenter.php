<?php
declare(strict_types=1);
/*------------------------------------
 | 外藉中鋒 Adaptee
 |------------------------------------
 |
 |
 |
 */

namespace Src\Adapter\example;


class ForeignCenter //因為是外藉，所以不能繼承player
{
    private $name;

    /*--------------------------------
     | 姓名的getter setter
     |--------------------------------
     | 故意不用建構式來區別與Player不同
     |
     |
     */
    public function __get($name)
    {
        return $this->name;
    }

    public function __set($name, $value)
    {
        $this->name = $value;
    }

    /**
     * 表明只懂中文
     */
    public function 進攻()
    {
        echo "外藉中鋒 {$this->name} 進攻\n";
    }

    public function 防守()
    {
        echo "外藉中鋒 {$this->name} 防守\n";
    }
}