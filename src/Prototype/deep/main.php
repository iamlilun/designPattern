<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | 展示履歷
 |--------------------------------------
 |
 |
 */

use Src\Prototype\deep\Resume;

require_once __DIR__ . '/../../../vendor/autoload.php';

//由於 WorkExperience 無法跟著Resume一起被複製，所以執行結果都會是最後的ZZ企業
$resumeA = new Resume("大鳥");
$resumeA->setPersonalInfo("男", "29");
$resumeA->setWorkExperience("1998-2000", "XX公司");

$resumeB = clone $resumeA;
$resumeB->setWorkExperience("2000-2006", "YY企業");

$resumeC = clone $resumeA;
$resumeC->setPersonalInfo("男", "24");
$resumeC->setWorkExperience("2006-2013", "ZZ企業");

$resumeA->display();
$resumeB->display();
$resumeC->display();