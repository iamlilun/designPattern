<?php
declare(strict_types=1);
/*------------------------------------
 | 安理會仲介 用戶端程式碼
 |------------------------------------
 |
 |
 |
 */
use Src\Mediator\example\UnitedNationsSecurityCouncil;
use Src\Mediator\example\Iraq;
use Src\Mediator\example\USA;

require_once __DIR__ . '/../../../vendor/autoload.php';

$unic = new UnitedNationsSecurityCouncil();
$usa = new USA($unic);
$iraq = new Iraq($unic);

$unic->setUsa($usa);
$unic->setIraq($iraq);

$usa->declare("不准研製核武，否則要發動戰爭！");
$iraq->declare("我們沒核武，也不怕侵略！");