<?php
declare(strict_types=1);
/*------------------------------------
 |  用戶端程式碼
 |------------------------------------
 |
 |
 |
 */

use Src\Adapter\basic\Adapter;

require_once __DIR__ . '/../../../vendor/autoload.php';

$target = new Adapter();
$target->request();