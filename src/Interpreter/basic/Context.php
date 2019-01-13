<?php
declare(strict_types=1);
/*------------------------------------
 | 上下文
 |------------------------------------
 | 解釋器外的一些全域資訊
 |
 |
 */

namespace Src\Interpreter\basic;


class Context
{
    private $input;

    private $output;

    public function __get($name)
    {
        return $this->$name;
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
    }
}