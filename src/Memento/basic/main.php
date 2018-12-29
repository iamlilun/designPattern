<?php
declare(strict_types=1);
/*------------------------------------
 | 用戶端程式
 |------------------------------------
 |
 |
 |
 */

use Src\Memento\basic\Caretaker;
use Src\Memento\basic\Originator;

require_once __DIR__ . '/../../../vendor/autoload.php';

$originator = new Originator();
$originator->state = "On"; //初使狀態屬性
$originator->show();

//保存狀態
$caretaker = new Caretaker();
$caretaker->memento = $originator->createMemento(); //保存狀態時，由於有了很好的封裝，可以隱藏Originator的實現細節

//改變狀態屬性
$originator->state = "Off";
$originator->show();

//恢復原初使狀態
$originator->setMemento($caretaker->memento);
$originator->show();