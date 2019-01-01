<?php
declare(strict_types=1);
/*------------------------------------
 | 用戶端程式碼
 |------------------------------------
 |
 |
 |
 */

use Src\Bridge\basic\ConcreteImplementorA;
use Src\Bridge\basic\ConcreteImplementorB;
use Src\Bridge\basic\RefinedAbstraction;

require_once __DIR__ . '/../../../vendor/autoload.php';

$abstract = new RefinedAbstraction();
$abstract->setImplementor(new ConcreteImplementorA());
$abstract->operation();

$abstract->setImplementor(new ConcreteImplementorB());
$abstract->operation();