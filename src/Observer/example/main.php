<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | 老闆回來通報 用戶端程式
 |--------------------------------------
 | 老闆出去，同事都在摸魚，當老闆回來，由櫃台袐書通知大家
 |
 */
use Src\Observer\example\Secretary;
use Src\Observer\example\StockObserver;
use Src\Observer\example\NBAObserver;

require_once __DIR__ . '/../../../vendor/autoload.php';

//實例櫃台袐書
$secretary = new Secretary();

//實例模魚同事
$stockObserverA = new StockObserver("魏關奼", $secretary);
$stockObserverB = new StockObserver("易管查", $secretary);
$nbaObserver = new NBAObserver("胡漢三", $secretary);

//幫看股票的同事把風
$secretary->attach($stockObserverA);
$secretary->attach($stockObserverB);

//沒幫關係差的NBA的同事把風
//$secretary->attach($nbaObserver);

//袐書發現老闆回來
$secretary->setAction("老闆回來了");

//通知兩個同事
$secretary->notify();

echo " 看NBA的胡漢三沒被通知到，所以下場很慘！\n";