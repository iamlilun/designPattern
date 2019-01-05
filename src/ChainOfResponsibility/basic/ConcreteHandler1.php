<?php
declare(strict_types=1);
/*------------------------------------
 | 具體處理者
 |------------------------------------
 | 處理他所負責的請求，如果可處理該請求，就處理
 | 不然就把他轉發給下一個後繼者
 |
 */

namespace Src\ChainOfResponsibility\basic;


class ConcreteHandler1 extends Handler
{

    /**
     * 處理請求的抽象方法
     * @param $request
     * @return void
     */
    public function handleRequest($request)
    {
        if($request >= 0 && $request < 10){ //0到10就處理此請求
            echo get_class($this) . " 處理請求 {$request}\n";
        } elseif ($this->successor != null){
            $this->successor->handleRequest($request); //不然就轉移到下一位處理
        }
    }
}