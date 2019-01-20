<?php
declare(strict_types=1);
/*------------------------------------
 | 用戶端程式碼
 |------------------------------------
 |
 |
 |
 */
use Src\Visitor\basic\ObjectStructure;
use Src\Visitor\basic\ConcreteElementA;
use Src\Visitor\basic\ConcreteElementB;
use Src\Visitor\basic\ConcreteVisitor1;
use Src\Visitor\basic\ConcreteVisitor2;

require_once __DIR__ . '/../../../vendor/autoload.php';

$objectStructure = new ObjectStructure();
$objectStructure->attach(new ConcreteElementA());
$objectStructure->attach(new ConcreteElementB());

$visitor1 = new ConcreteVisitor1();
$visitor2 = new ConcreteVisitor2();

$objectStructure->accept($visitor1);
$objectStructure->accept($visitor2);
