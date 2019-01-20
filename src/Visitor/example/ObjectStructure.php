<?php
declare(strict_types=1);
/*------------------------------------
 | 物件結構
 |------------------------------------
 |
 |
 |
 */

namespace Src\Visitor\example;


class ObjectStructure
{
    private $elements = [];

    public function attach(Person $element)
    {
        $this->elements[] = $element;
    }

    public function detach(Person $element)
    {
        $key = array_search($element, $this->elements);
        if($this->element[$key] === $element){
            unset($this->elements[$key]);
        }
    }

    public function display(Action $visitor)
    {
        foreach ($this->elements as $person) {
            $person->accept($visitor);
        }
    }
}