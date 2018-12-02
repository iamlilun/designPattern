<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | 計算價錢
 |--------------------------------------
 |
 |
 */

use Src\SimpleFactory\example\CashFactory;

require_once __DIR__ . '/../../../vendor/autoload.php';

$money = 1000; //消費金額

$item = [
    '正常收費',
    '滿300送100',
    '打8折',
];

//正常收費
$accept = CashFactory::createCashAccept($item[0]);
$totalPrices = $accept->acceptCash($money);
echo $item[0] . " : ${totalPrices}\n";

//滿300送100
$accept = CashFactory::createCashAccept($item[1]);
$totalPrices = $accept->acceptCash($money);
echo $item[1] . " : ${totalPrices}\n";

//打8折
$accept = CashFactory::createCashAccept($item[2]);
$totalPrices = $accept->acceptCash($money);
echo $item[2] . " : ${totalPrices}\n";