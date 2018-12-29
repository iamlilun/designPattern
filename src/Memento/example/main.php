<?php
declare(strict_types=1);
/*------------------------------------
 | 冒險家大戰boss
 |------------------------------------
 |
 |
 |
 */
use Src\Memento\example\GameRole;
use Src\Memento\example\RoleStateCaretaker;
use Src\Memento\example\RoleStateMemento;

require_once __DIR__ . '/../../../vendor/autoload.php';

//大戰boss前，三項指標都是100
$gameRole = new GameRole();
$gameRole->getInitState();
$gameRole->stateDisplay();

//保存進度
$roleStateCaretaker = new RoleStateCaretaker();
$roleStateCaretaker->memento = $gameRole->saveState(); //因為儲存的實作封狀在memento，因此我們不知道保存了哪些資料

//大戰Boss,損耗嚴重
$gameRole->fight();
$gameRole->stateDisplay();

//恢復之前狀態
$gameRole->recoveryState($roleStateCaretaker->memento); //從管理者取回記錄檔
$gameRole->stateDisplay();