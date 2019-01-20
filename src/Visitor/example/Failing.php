<?php
declare(strict_types=1);
/*------------------------------------
 | 失敗 ConcreteElement
 |------------------------------------
 |
 |
 |
 */

namespace Src\Visitor\example;


class Failing extends Action
{

    /**
     * 取得男人的結論或反應
     * @param Man $concreteElementA
     * @throws \ReflectionException
     */
    public function getManConclusion(Man $concreteElementA)
    {
        echo $this->getClassName($concreteElementA) . ' ' . $this->getClassName($this) . "時，悶著喝酒，誰也不用勸" . PHP_EOL;
    }

    /**
     * 取得女人的結論或反應
     * @param Woman $concreteElementB
     * @throws \ReflectionException
     */
    public function getWomanConclusion(Woman $concreteElementB)
    {
        echo $this->getClassName($concreteElementB) . ' ' . $this->getClassName($this) . "時，淚眼汪汪，誰也勸不了" . PHP_EOL;
    }
}