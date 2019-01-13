<?php
declare(strict_types=1);
/*------------------------------------
 | 用戶端程式碼
 |------------------------------------
 |
 |
 |
 */
use Src\Interpreter\basic\Context;
use Src\Interpreter\basic\NonTerminalExpression;
use Src\Interpreter\basic\TerminalExpression;

require_once __DIR__ . '/../../../vendor/autoload.php';

$context = new Context();

$list = [];

$list[] = new TerminalExpression();
$list[] = new NonTerminalExpression();
$list[] = new TerminalExpression();
$list[] = new TerminalExpression();

foreach ($list as $item) {
    $item->interpret($context);
}