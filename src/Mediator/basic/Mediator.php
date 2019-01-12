<?php
declare(strict_types=1);
/*------------------------------------
 | 抽象仲介者類別
 |------------------------------------
 |
 |
 |
 */

namespace Src\Mediator\Basic;


abstract class Mediator
{
    abstract public function send($message, Colleague $colleague);
}