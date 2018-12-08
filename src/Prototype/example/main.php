<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | 展示履歷
 |--------------------------------------
 |
 |
 */

use Src\Prototype\example\Resume;

require_once __DIR__ . '/../../../vendor/autoload.php';

$resumeA = new Resume("大鳥");
$resumeA->setPersonalInfo("男", "29");
$resumeA->setWorkExperience("1998-2000", "XX公司");

$resumeB = clone $resumeA;
$resumeB->setWorkExperience("2000-2006", "XX企業");

$resumeC = clone $resumeA;
$resumeC->setPersonalInfo("男", "24");

$resumeA->display();
$resumeB->display();
$resumeC->display();