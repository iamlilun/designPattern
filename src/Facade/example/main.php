<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | 用戶端程式碼
 |--------------------------------------
 |
 |
 */

use Src\Facade\example\Fund;

require_once __DIR__ . '/../../../vendor/autoload.php';

$fund = new Fund();

$fund->buyFund();
$fund->sellFund();