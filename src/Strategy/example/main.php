<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | 用戶端程式碼
 |--------------------------------------
 |
 |
 */

use Src\Strategy\example\CashContext;

require_once __DIR__ . '/../../../vendor/autoload.php';

$money = 1000; //消費金額

$item = [
    '正常收費',
    '滿300送100',
    '打8折',
];

//正常收費
$context = new CashContext($item[0]);
$totalPrices = $context->getResult($money);
echo $item[0] . " : ${totalPrices}\n";

//滿300送100
$context = new CashContext($item[1]);
$totalPrices = $context->getResult($money);
echo $item[1] . " : ${totalPrices}\n";

//打8折
$context = new CashContext($item[2]);
$totalPrices = $context->getResult($money);
echo $item[2] . " : ${totalPrices}\n";
