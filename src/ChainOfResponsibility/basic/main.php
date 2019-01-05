<?php
declare(strict_types=1);
/*------------------------------------
 | 用戶端程式碼
 |------------------------------------
 |
 |
 |
 */
use Src\ChainOfResponsibility\basic\ConcreteHandler1;
use Src\ChainOfResponsibility\basic\ConcreteHandler2;
use Src\ChainOfResponsibility\basic\ConcreteHandler3;

require_once __DIR__ . '/../../../vendor/autoload.php';

$handle1 = new ConcreteHandler1();
$handle2 = new ConcreteHandler2();
$handle3 = new ConcreteHandler3();

$handle1->setSuccessor($handle2);
$handle2->setSuccessor($handle3);

$requests = [2, 5, 14, 22, 18, 3, 27, 20];

foreach($requests as $v){
    $handle1->handleRequest($v);
}