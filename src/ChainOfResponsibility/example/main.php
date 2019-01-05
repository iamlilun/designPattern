<?php
declare(strict_types=1);
/*------------------------------------
 | 事務申請 用戶端程式碼
 |------------------------------------
 |
 |
 |
 */
use Src\ChainOfResponsibility\example\CommonManager;
use Src\ChainOfResponsibility\example\Majordomo;
use Src\ChainOfResponsibility\example\GeneralManager;
use Src\ChainOfResponsibility\example\Request;

require_once __DIR__ . '/../../../vendor/autoload.php';

$commonManger = new CommonManager("王經理");
$majordomo = new Majordomo("喵總監");
$generalManager = new GeneralManager("李總");

//設定上級
$commonManger->setSuperior($majordomo);
$majordomo->setSuperior($generalManager);

$request = new Request();
$request->setRequestType("請假");
$request->setRequestContent("小蔡請假");
$request->setNumber(1);
$commonManger->requestApplications($request);

$request2 = new Request();
$request2->setRequestType("請假");
$request2->setRequestContent("小蔡請假");
$request2->setNumber(4);
$commonManger->requestApplications($request2);

$request3 = new Request();
$request3->setRequestType("加薪");
$request3->setRequestContent("小蔡要求加薪");
$request3->setNumber(500);
$commonManger->requestApplications($request3);

$request4 = new Request();
$request4->setRequestType("加薪");
$request4->setRequestContent("小蔡要求加薪");
$request4->setNumber(1000);
$commonManger->requestApplications($request4);