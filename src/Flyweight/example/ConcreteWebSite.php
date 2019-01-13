<?php
declare(strict_types=1);
/*------------------------------------
 | 具體網站類別 ConcreteFlyweight
 |------------------------------------
 |
 |
 |
 */

namespace Src\Flyweight\example;


class ConcreteWebSite extends WebSite
{

    private $name = '';

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function use()
    {
        echo "網站分類： {$this->name}\n";
    }
}