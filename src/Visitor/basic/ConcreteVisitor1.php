<?php
declare(strict_types=1);
/*------------------------------------
 | 具體訪問者
 |------------------------------------
 | 實現Visitor的操作(method)，每個操作實現演算法的一部份
 |
 |
 */

namespace Src\Visitor\basic;


class ConcreteVisitor1 extends Visitor
{

    public function visitConcreteElementA(ConcreteElementA $concreteElementA)
    {
        echo $this->getClassName($concreteElementA) . " 被 " . $this->getClassName($this) . "存取" . PHP_EOL;
    }

    public function visitConcreteElementB(ConcreteElementB $concreteElementB)
    {
        echo $this->getClassName($concreteElementB) . " 被 " . $this->getClassName($this) . "存取" . PHP_EOL;
    }

}