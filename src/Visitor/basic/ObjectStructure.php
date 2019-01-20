<?php
declare(strict_types=1);
/*------------------------------------
 | 物件結構
 |------------------------------------
 | 提供一個高層的介面讓訪問者存取原素
 |
 |
 */

namespace Src\Visitor\basic;


class ObjectStructure
{
    private $elements = [];

    public function attach(Element $element)
    {
        $this->elements[] = $element;
    }

    public function detach(Element $element)
    {
        $key = array_search($element, $this->elements);
        if($this->element[$key] === $element){
            unset($this->elements[$key]);
        }
    }

    public function accept(Visitor $visitor)
    {
        foreach ($this->elements as $element) {
            $element->accept($visitor);
        }
    }
}