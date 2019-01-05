<?php
declare(strict_types=1);
/*------------------------------------
 | 處理請求的介面
 |------------------------------------
 |
 |
 |
 */

namespace Src\ChainOfResponsibility\basic;


abstract class Handler
{
    protected $successor;

    /**
     * 設定繼任者
     * @param mixed $successor
     */
    public function setSuccessor($successor): void
    {
        $this->successor = $successor;
    }

    /**
     * 處理請求的抽象方法
     * @param $request
     * @return void
     */
    abstract public function handleRequest($request);
}