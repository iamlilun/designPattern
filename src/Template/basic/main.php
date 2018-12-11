<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | 用戶端程式碼
 |--------------------------------------
 |
 |
 */

use Src\Template\basic\ConcreteClassA;
use Src\Template\basic\ConcreteClassB;

require_once __DIR__ . '/../../../vendor/autoload.php';

$class = new ConcreteClassA();
$class->templateMethod();

$class = new ConcreteClassB();
$class->templateMethod();