<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | 用戶端程式碼
 |--------------------------------------
 | 用抽象工廠來決定用什麼方式製作產品
 | 用戶是用抽象介面操縱實體
 */

use Src\AbstractFactory\basic\ConcreteFactory1;
use Src\AbstractFactory\basic\ConcreteFactory2;

require_once __DIR__ . '/../../../vendor/autoload.php';


//手工製作
$factory = new ConcreteFactory1();

//製作A
$iMake = $factory->crateProductA();
$iMake->ProductA();

//製作B
$iMake = $factory->crateProductB();
$iMake->ProductB();

//-----------------------------

//機器製作
$factory = new ConcreteFactory2();

//製作A
$iMake = $factory->crateProductA();
$iMake->ProductA();

//製作B
$iMake = $factory->crateProductB();
$iMake->ProductB();



