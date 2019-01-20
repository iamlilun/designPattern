<?php
declare(strict_types=1);
/*------------------------------------
 | 抽象訪問者
 |------------------------------------
 | 為每個具體原素定義一個訪問操作
 |
 |
 */

namespace Src\Visitor\basic;


use ReflectionClass;

abstract class Visitor
{
    abstract public function visitConcreteElementA(ConcreteElementA $concreteElementA);

    abstract public function visitConcreteElementB(ConcreteElementB $concreteElementB);

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