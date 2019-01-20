<?php
declare(strict_types=1);
/*------------------------------------
 | 具體原素
 |------------------------------------
 | 實現accept操作
 |
 |
 */

namespace Src\Visitor\basic;


class ConcreteElementA extends Element
{

    public function accept(Visitor $visitor)
    {
        $visitor->visitConcreteElementA($this);
    }

    /**
     * 其它相關方法
     */
    public function operationA():void
    {

    }
}