<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | 追求者 RealSubject
 |--------------------------------------
 |
 |
 */


namespace Src\Proxy\example;


class Pursuit implements IGiveGift
{
    /** @var SchoolGirl  */
    private $schoolGirl;

    /**
     * Pursuit constructor.
     * @param SchoolGirl $schoolGirl
     */
    public function __construct(SchoolGirl $schoolGirl)
    {
        $this->schoolGirl = $schoolGirl;
    }

    /**
     * 送洋娃娃
     */
    public function giveDolls()
    {
        echo "{$this->schoolGirl->name} 送你洋娃娃\n";
    }

    /**
     * 送鮮花
     */
    public function giveFlowers()
    {
        echo "{$this->schoolGirl->name} 送你鮮花\n";
    }

    /**
     * 送巧克力
     */
    public function giveChocolate()
    {
        echo "{$this->schoolGirl->name} 送你巧克力\n";
    }
}