<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | 用戶端程式碼
 |--------------------------------------
 |
 |
 */

use Src\Facade\basic\Facade;

require_once __DIR__ . '/../../../vendor/autoload.php';

$facade = new Facade();

$facade->methodA();
$facade->methodB();