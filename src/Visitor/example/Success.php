<?php
declare(strict_types=1);
/*------------------------------------
 | 成功 ConcreteElement
 |------------------------------------
 |
 |
 |
 */

namespace Src\Visitor\example;


class Success extends Action
{

    /**
     * 取得男人的結論或反應
     * @param Man $concreteElementA
     * @throws \ReflectionException
     */
    public function getManConclusion(Man $concreteElementA)
    {
        echo $this->getClassName($concreteElementA)  . ' ' .  $this->getClassName($this) . "時，背後多半有個偉大的女人" . PHP_EOL;
    }

    /**
     * 取得女人的結論或反應
     * @param Woman $concreteElementB
     * @throws \ReflectionException
     */
    public function getWomanConclusion(Woman $concreteElementB)
    {
        echo $this->getClassName($concreteElementB)  . ' ' .  $this->getClassName($this) . "時，背後多半有一個不成功的男人" . PHP_EOL;
    }
}