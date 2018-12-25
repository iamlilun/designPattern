<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | 用戶端程式碼 Client
 |--------------------------------------
 | 因為在ConcreteStatus@handle裡會去set state的狀態
 | 所以狀態每次都不一樣
 */

use Src\State\basic\ConcreteStatusA;
use Src\State\basic\Context;

require_once __DIR__ . '/../../../vendor/autoload.php';

$context = new Context(new ConcreteStatusA());

//不斷的要求，同時更改狀態
$context->request();
$context->request();
$context->request();
$context->request();