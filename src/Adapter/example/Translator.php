<?php
declare(strict_types=1);
/*------------------------------------
 | 翻譯者 Adapter
 |------------------------------------
 |
 |
 |
 */

namespace Src\Adapter\example;


class Translator extends Player
{
    private $foreignCenter;

    public function __construct($name)
    {
        parent::__construct($name);
        $this->foreignCenter = new ForeignCenter();
        $this->foreignCenter->name = $name;
    }

    public function attack()
    {
        $this->foreignCenter->進攻();
    }

    public function defense()
    {
        $this->foreignCenter->防守();
    }
}