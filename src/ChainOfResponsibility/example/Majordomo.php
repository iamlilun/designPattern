<?php
declare(strict_types=1);
/*------------------------------------
 | 總監類別 ConcreteHandler
 |------------------------------------
 |
 |
 |
 */

namespace Src\ChainOfResponsibility\example;


class Majordomo extends Manager
{

    /**
     * 經理可准許下屬1週內的假期
     * @param Request $request
     */
    public function requestApplications(Request $request)
    {
        if($request->getRequestType() == '請假' && $request->getNumber() <=5){
            echo "{$this->name}:{$request->getRequestContent()} 數量 {$request->getNumber()} 被批准\n";
        } elseif ($this->superior != null){ //其它的申請都轉給上級
            $this->superior->requestApplications($request);
        }
    }
}