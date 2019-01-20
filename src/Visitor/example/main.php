<?php
declare(strict_types=1);
/*------------------------------------
 | 男人女人大不同 用戶端程式碼
 |------------------------------------
 |
 |
 |
 */
use Src\Visitor\example\ObjectStructure;
use Src\Visitor\example\Man;
use Src\Visitor\example\Woman;
use Src\Visitor\example\Success;
use Src\Visitor\example\Failing;
use Src\Visitor\example\Amativeness;

require_once __DIR__ . '/../../../vendor/autoload.php';

$objectStructure = new ObjectStructure();
$objectStructure->attach(new Man());
$objectStructure->attach(new Woman());

//成功時反應
$success = new Success();
$objectStructure->display($success);

//失敗時反應
$failing = new Failing();
$objectStructure->display($failing);

//戀愛時反應
$amativeness = new Amativeness();
$objectStructure->display($amativeness);