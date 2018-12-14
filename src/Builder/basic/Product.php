<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | Product 產品類別
 |--------------------------------------
 |
 |
 */


namespace Src\Builder\basic;


class Product
{
    /** @var array 零件 */
    private $parts = [];

    /**
     * 增加零件
     * @param string $part : 零件名
     */
    public function add($part)
    {
        $this->parts[] = $part;
    }

    /**
     * 顯示所有零件
     */
    public function show()
    {
        foreach($this->parts as $v){
            echo "$v \n";
        }
    }
}