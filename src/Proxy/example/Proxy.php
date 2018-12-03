<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | 好朋友代理追妹妹
 |--------------------------------------
 |
 |
 */


namespace Src\Proxy\example;


class Proxy implements IGiveGift
{
    /** @var Pursuit  */
    private $pursuit;

    /**
     * Proxy constructor.
     * @param SchoolGirl $schoolGirl
     */
    public function __construct(SchoolGirl $schoolGirl)
    {
        $this->pursuit = new Pursuit($schoolGirl);
    }

    /**
     * 送洋娃娃
     */
    public function giveDolls()
    {
        $this->pursuit->giveDolls();
    }

    /**
     * 送鮮花
     */
    public function giveFlowers()
    {
        $this->pursuit->giveFlowers();
    }

    /**
     * 送巧克力
     */
    public function giveChocolate()
    {
        $this->pursuit->giveChocolate();
    }
}