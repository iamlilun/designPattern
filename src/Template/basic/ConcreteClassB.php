<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | Concrete class
 |--------------------------------------
 | 具體類別，實現父類的一個或多個抽象方法
 |
 */


namespace Src\Template\basic;


class ConcreteClassB extends AbstractClass
{

    public function primitiveOperation1()
    {
        echo "具體類別B 方法1 實現 \n";
    }

    public function primitiveOperation2()
    {
        echo "具體類別B 方法2 實現 \n";
    }
}