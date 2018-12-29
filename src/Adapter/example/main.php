<?php
declare(strict_types=1);
/*------------------------------------
 | 藍球翻譯轉接器
 |------------------------------------
 |
 |
 |
 */

use Src\Adapter\example\Forwards;
use Src\Adapter\example\Guards;
use Src\Adapter\example\Translator;

require_once __DIR__ . '/../../../vendor/autoload.php';

$forwards = new Forwards("巴蒂爾");
$forwards->attack();

$guards = new Guards("麥克格雷迪");
$guards->attack();

//外藉中鋒透過翻譯員來做轉接器
$foreignCenter = new Translator("姚明");
$foreignCenter->attack();
$foreignCenter->defense();
