<?php
declare(strict_types=1);
/*------------------------------------
 | 戀愛 ConcreteElement
 |------------------------------------
 |
 |
 |
 */

namespace Src\Visitor\example;


class Amativeness extends Action
{

    /**
     * 取得男人的結論或反應
     * @param Man $concreteElementA
     * @throws \ReflectionException
     */
    public function getManConclusion(Man $concreteElementA)
    {
        echo $this->getClassName($concreteElementA) . ' ' . $this->getClassName($this) . "時，凡事不懂也要裝懂" . PHP_EOL;
    }

    /**
     * 取得女人的結論或反應
     * @param Woman $concreteElementB
     * @throws \ReflectionException
     */
    public function getWomanConclusion(Woman $concreteElementB)
    {
        echo $this->getClassName($concreteElementB) . ' ' . $this->getClassName($this) . "時，遇事懂也裝不懂" . PHP_EOL;
    }
}