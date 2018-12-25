<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | 工作狀態 Client
 |--------------------------------------
 |
 |
 */

use Src\State\example\Work;

require_once __DIR__ . '/../../../vendor/autoload.php';

//緊急轉案
$emergency = new Work();
$emergency->hour = 9;
$emergency->writeProgram();
$emergency->hour = 10;
$emergency->writeProgram();
$emergency->hour = 12;
$emergency->writeProgram();
$emergency->hour = 13;
$emergency->writeProgram();
$emergency->hour = 14;
$emergency->writeProgram();
$emergency->hour = 17;

//$emergency->finish = true;
//$emergency->finish = false;

$emergency->writeProgram();

$emergency->hour = 19;
$emergency->writeProgram();

$emergency->hour = 24;
$emergency->writeProgram();
