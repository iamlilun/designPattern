<?php
declare(strict_types=1);
/*------------------------------------
 | 用戶端程式碼
 |------------------------------------
 |
 |
 |
 */
use Src\Command\basic\Receiver;
use Src\Command\basic\ConcreteCommand;
use Src\Command\basic\Invoker;

require_once __DIR__ . '/../../../vendor/autoload.php';

$receiver = new Receiver();
$command = new ConcreteCommand($receiver);
$invoker = new Invoker();

$invoker->setCommand($command);
$invoker->executeCommand();