<?php
declare(strict_types=1);
/*------------------------------------
 | 球員 Target
 |------------------------------------
 |
 |
 |
 */

namespace Src\Adapter\example;


abstract class Player
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    abstract public function attack();

    abstract public function defense();
}