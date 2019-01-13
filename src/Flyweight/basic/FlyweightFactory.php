<?php
declare(strict_types=1);
/*------------------------------------
 | Flyweight工廠
 |------------------------------------
 | 當用戶請求一個Flyweight，工廠回復一個已經建立的物件
 | 或建立一個新的物件(如果不存在的話)
 |
 */

namespace Src\Flyweight\basic;


class FlyweightFactory
{
    private $flyweights = [];

    public function __construct()
    {
        $this->flyweights['X'] = new ConcreteFlyweight();
        $this->flyweights['Y'] = new ConcreteFlyweight();
        $this->flyweights['Z'] = new ConcreteFlyweight();
    }

    public function getFlyweight($k)
    {
        return $this->flyweights[$k];
    }
}