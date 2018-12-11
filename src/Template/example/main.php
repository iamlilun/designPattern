<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | 學生抄考卷
 |--------------------------------------
 |
 |
 */

use Src\Template\example\TestPaperA;
use Src\Template\example\TestPaperB;

require_once __DIR__ . '/../../../vendor/autoload.php';

echo "學生A抄的試卷：\n";
$studentA = new TestPaperA();
$studentA->testQuestion1();
$studentA->testQuestion2();
$studentA->testQuestion3();

echo "學生B抄的試卷：\n";
$studentB = new TestPaperB();
$studentB->testQuestion1();
$studentB->testQuestion2();
$studentB->testQuestion3();