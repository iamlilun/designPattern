<?php
declare(strict_types=1);
/*------------------------------------
 | 燒烤店
 |------------------------------------
 |
 |
 |
 */
use Src\Command\example\Barbecuer;
use Src\Command\example\BakeMuttonCommand;
use Src\Command\example\BakeChickenCommand;
use Src\Command\example\Waiter;

require_once __DIR__ . '/../../../vendor/autoload.php';

//開店前準備
$boy = new Barbecuer();
$bakeMuttonCommand1 = new BakeMuttonCommand($boy);
$bakeMuttonCommand2 = new BakeMuttonCommand($boy);
$bakeChickenCommand = new BakeChickenCommand($boy);
$girl = new Waiter();

//開門營業 顧客點菜
$girl->setOrder($bakeMuttonCommand1);
$girl->setOrder($bakeMuttonCommand2);
$girl->setOrder($bakeChickenCommand);

//點菜完畢
$girl->notify();