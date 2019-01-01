<?php
declare(strict_types=1);
/*------------------------------------
 | 共用手機軟體 用戶端程式碼
 |------------------------------------
 |
 |
 |
 */
use Src\Bridge\example\HandSetBrandN;
use Src\Bridge\example\HandSetBrandM;
use Src\Bridge\example\HandSetBrandS;
use Src\Bridge\example\HandSetGame;
use Src\Bridge\example\HandSetAddressList;
use Src\Bridge\example\HandSetMP3;

require_once __DIR__ . '/../../../vendor/autoload.php';

$handSetBrandN = new HandSetBrandN();
$handSetBrandN->setHandsetSoft(new HandSetGame());
$handSetBrandN->run();
$handSetBrandN->setHandsetSoft(new HandSetAddressList());
$handSetBrandN->run();
$handSetBrandN->setHandsetSoft(new HandSetMP3());
$handSetBrandN->run();

$handSetBrandM = new HandSetBrandM();
$handSetBrandM->setHandsetSoft(new HandSetGame());
$handSetBrandM->run();
$handSetBrandM->setHandsetSoft(new HandSetAddressList());
$handSetBrandM->run();
$handSetBrandM->setHandsetSoft(new HandSetMP3());
$handSetBrandM->run();

$handSetBrandS = new HandSetBrandS();
$handSetBrandS->setHandsetSoft(new HandSetGame());
$handSetBrandS->run();
$handSetBrandS->setHandsetSoft(new HandSetAddressList());
$handSetBrandS->run();
$handSetBrandS->setHandsetSoft(new HandSetMP3());
$handSetBrandS->run();