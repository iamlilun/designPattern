<?php
declare(strict_types=1);
/*------------------------------------
 | 總經理類別 ConcreteHandler
 |------------------------------------
 |
 |
 |
 */

namespace Src\ChainOfResponsibility\example;


class GeneralManager extends Manager
{

    /**
     * 總經理什麼都要處理
     * @param Request $request
     */
    public function requestApplications(Request $request)
    {
        if($request->getRequestType() == '請假' && $request->getNumber() <=2){
            echo "{$this->name}:{$request->getRequestContent()} 數量 {$request->getNumber()} 被批准\n";
        } elseif($request->getRequestType() == '加薪') {
            if($request->getNumber() <= 500){ //加薪500以內直接同意..不然就要考慮
                echo "{$this->name}:{$request->getRequestContent()} 數量 {$request->getNumber()} 被批准\n";
            } else {
                echo "{$this->name}:{$request->getRequestContent()} 數量 {$request->getNumber()} 再說吧\n";
            }
        }
    }
}