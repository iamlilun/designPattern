<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | 用戶端程式碼
 |--------------------------------------
 |
 |
 */

use Src\Builder\basic\Director;
use Src\Builder\basic\ConcreteBuilderA;
use Src\Builder\basic\ConcreteBuilderB;
use Src\Builder\basic\Product;

require_once __DIR__ . '/../../../vendor/autoload.php';

$director = new Director();

//指揮者用 ConcreteBuilderA 來建產品
$builderA = new ConcreteBuilderA();
$director->construct($builderA);
$productA = $builderA->getResult();
$productA->show();

//指揮者用 ConcreteBuilderB 來建產品
$builderB = new ConcreteBuilderB();
$director->construct($builderB);
$productB = $builderB->getResult();
$productB->show();