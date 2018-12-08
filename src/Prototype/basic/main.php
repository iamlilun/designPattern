<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | 用戶端程式
 |--------------------------------------
 |
 |
 */

use Src\Prototype\basic\ConcretePrototype;

require_once __DIR__ . '/../../../vendor/autoload.php';

$concretePrototype = new ConcretePrototype("I");
$concreteClone = clone $concretePrototype; //用clone來複製$concretePrototype
echo "Cloned: {$concreteClone->Id()}\n";