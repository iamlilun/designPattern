<?php
declare(strict_types=1);
/*------------------------------------
 | 聯合國類別 Mediator
 |------------------------------------
 |
 |
 |
 */

namespace Src\Mediator\example;


abstract class UnitedNations
{
    /**
     * 宣告
     * @param $message
     * @param Country $country
     * @return void
     */
    abstract public function declare($message, Country $country);
}