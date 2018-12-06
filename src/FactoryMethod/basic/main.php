<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | 用戶端程式碼
 |--------------------------------------
 | 如果要增加功能，在簡單工廠模式時是修改工廠裡的switch case..
 | 在這裡用了工廠方法變成要修改用戶端程式..用戶自己決定實體化哪個工廠來實現功能
 |
 */


use Src\FactoryMethod\basic\ConcreteCreatorA;
use Src\FactoryMethod\basic\ConcreteCreatorB;

require_once __DIR__ . '/../../../vendor/autoload.php';

//--- Make product A ----
$factory = new ConcreteCreatorA();
$productA = $factory->factoryMethod();
$productA->makeProduct();

//--- Make product B ----
$factory = new ConcreteCreatorB();
$productB = $factory->factoryMethod();
$productB->makeProduct();