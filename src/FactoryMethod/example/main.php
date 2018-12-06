<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | 讓男丁格爾的精神永存人間
 |--------------------------------------
 |
 |
 */

use Src\FactoryMethod\example\UndergraduateFactory;
use Src\FactoryMethod\example\VolunteerFactory;

require_once __DIR__ . '/../../../vendor/autoload.php';

//-------- 由學生來效法他 ----------
$factory = new UndergraduateFactory();
$student = $factory->createNightingale();

$student->buyRice();
$student->sweep();
$student->wash();

//------- 校外也有義工來效法他 ------------
$factory = new VolunteerFactory();
$volunteer = $factory->createNightingale();

$volunteer->buyRice();
$volunteer->sweep();
$volunteer->wash();