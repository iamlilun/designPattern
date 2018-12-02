<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | 用戶端程式碼
 |--------------------------------------
 |
 |
 */

use Src\Decorator\basic\ConcreteComponent;
use Src\Decorator\basic\ConcreteDecoratorA;
use Src\Decorator\basic\ConcreteDecoratorB;

require_once __DIR__ . '/../../../vendor/autoload.php';

//首先實例化具體Component
$c = new ConcreteComponent();

//依需求實例化要裝飾的class
$d1 = new ConcreteDecoratorA();
$d2 = new ConcreteDecoratorB();

$d1->setComponent($c); //包裝ConcreteComponent
$d2->setComponent($d1); //再包裝ConcreteDecoratorA, 同時c也包裝在d1內了..

// 執行了d2的operation等同於執行了$c->operation() 在執行 $d1->operation()
// 最後執行自己的operation()..一層一層的裝飾..
$d2->operation();