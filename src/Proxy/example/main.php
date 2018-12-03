<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | 用戶端程式碼
 |--------------------------------------
 |
 |
 */

use Src\Proxy\example\Proxy;
use Src\Proxy\example\SchoolGirl;

require_once __DIR__ . '/../../../vendor/autoload.php';

$schoolGirl = new SchoolGirl();
$schoolGirl->name = '李嬌嬌';

$proxy = new Proxy($schoolGirl);

$proxy->giveDolls();
$proxy->giveFlowers();
$proxy->giveChocolate();