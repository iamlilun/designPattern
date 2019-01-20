<?php
declare(strict_types=1);
/*------------------------------------
 | 狀態類 Visitor
 |------------------------------------
 |
 |
 |
 */

namespace Src\Visitor\example;


use ReflectionClass;

abstract class Action
{
    /**
     * 取得男人的結論或反應
     * @param Man $concreteElementA
     */
    abstract public function getManConclusion(Man $concreteElementA);

    /**
     * 取得女人的結論或反應
     * @param Woman $concreteElementB
     */
    abstract public function getWomanConclusion(Woman $concreteElementB);

    /**
     * 取得class 名
     * @param $object
     * @return string|null
     * @throws \ReflectionException
     */
    protected function getClassName($object)
    {
        if(is_object($object)) {
            $reflect = new ReflectionClass($object);
            return $reflect->getShortName();
        }
        return null;
    }
}