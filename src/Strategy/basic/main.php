<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | 用戶端程式碼
 |--------------------------------------
 |
 |
 */
use Src\Strategy\basic\ConcreteStrategyA;
use Src\Strategy\basic\ConcreteStrategyB;
use Src\Strategy\basic\ConcreteStrategyC;
use Src\Strategy\basic\Context;
require_once __DIR__ . '/../../../vendor/autoload.php';


//由於實體是不同的策略，所以調用ContextInterface()時，所獲得的結果也不一樣
$context = new Context(new ConcreteStrategyA());
$context->ContextInterface();

$context = new Context(new ConcreteStrategyB());
$context->ContextInterface();

$context = new Context(new ConcreteStrategyC());
$context->ContextInterface();