<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | 用戶端程式碼
 |--------------------------------------
 |
 |
 */

use Src\Proxy\basic\Proxy;

require_once __DIR__ . '/../../../vendor/autoload.php';

$proxy = new Proxy();
$proxy->request();