<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | 上下文
 |--------------------------------------
 | 在程式中，上下文白話就是：你給它什麼樣的值(上文)，它就反回該值所對應的狀態(下文)..
 |
 */


namespace Src\Strategy\basic;


class Context
{
    /** @var Strategy */
    private $strategy;

    /**
     * Context constructor.
     * 初使化時，傳入具體的策略物件
     * @param Strategy $strategy
     */
    public function __construct(Strategy $strategy)
    {
        $this->strategy = $strategy;
    }

    /**
     * 根據具體的策略物件調用其演算方法
     */
    public function ContextInterface()
    {
        $this->strategy->algorithmInterface();
    }
}