<?php
declare(strict_types=1);
/*------------------------------------
 |
 |------------------------------------
 |
 |
 |
 */

namespace Src\Mediator\Basic;


abstract class Colleague
{
    protected $mediator;

    public function __construct(Mediator $mediator)
    {
        $this->mediator = $mediator;
    }
}