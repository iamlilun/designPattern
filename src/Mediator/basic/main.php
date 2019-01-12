<?php
declare(strict_types=1);
/*------------------------------------
 | 用戶端程式碼
 |------------------------------------
 |
 |
 |
 */
use Src\Basic\Mediator\ConcreteColleague1;
use Src\Basic\Mediator\ConcreteColleague2;
use Src\Basic\Mediator\ConcreteMediator;

require_once __DIR__ . '/../../../vendor/autoload.php';

$mediator = new ConcreteMediator();
$mediator->fuck();

//$colleague1 = new ConcreteColleague1();
//$colleague2 = new ConcreteColleague2();
//$colleague1->setMediator($mediator);
//$colleague2->setMediator($mediator);
//
////讓仲介者認識各個同事
//$mediator->setColleague1($colleague1);
//$mediator->setColleague2($colleague2);
//
////同事們的對話透過仲介者轉發
//$colleague1->send('吃過飯了嗎？');
//$colleague2->send('還沒有，你打算請客嗎？');
