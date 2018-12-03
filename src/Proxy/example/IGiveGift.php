<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | 送禮物介面 Subject
 |--------------------------------------
 | 沒共用的屬性用interface就行
 |
 */


namespace Src\Proxy\example;


interface IGiveGift
{
    /**
     * 送洋娃娃
     */
    public function giveDolls();

    /**
     * 送鮮花
     */
    public function giveFlowers();

    /**
     * 送巧克力
     */
    public function giveChocolate();
}