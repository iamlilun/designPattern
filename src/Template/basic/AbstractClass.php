<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | Abstract
 |--------------------------------------
 | 實現一個範本方法，定義了演算法骨架
 |
 */


namespace Src\Template\basic;


abstract class AbstractClass
{
    abstract public function primitiveOperation1();

    abstract public function primitiveOperation2();

    /**
     * 邏輯的骨架
     */
    public function templateMethod()
    {
        //邏輯的組成是一些相應的抽象操作，都在子類別實現
        $this->primitiveOperation1();
        $this->primitiveOperation2();
        echo " \n";
    }
}