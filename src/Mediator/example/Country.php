<?php
declare(strict_types=1);
/*------------------------------------
 | 抽象國家類 Colleague
 |------------------------------------
 |
 |
 |
 */

namespace Src\Mediator\example;


abstract class Country
{
    protected $mediator;

    public function __construct(UnitedNations $mediator)
    {
        $this->mediator = $mediator;
    }
}