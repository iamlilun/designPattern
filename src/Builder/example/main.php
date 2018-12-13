<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | 創造 KOF 人物
 |--------------------------------------
 |
 |
 */
use Src\Builder\example\Director;
use Src\Builder\example\Kyo;
use Src\Builder\example\Mai;

require_once __DIR__ . '/../../../vendor/autoload.php';

$director = new Director();

//創建草薙京
$build = new Kyo();
$director->construct($build);
$person = $build->getPerson();
$person->show();

echo "-----------------------\n";

//創建不知火舞
$build = new Mai();
$director->construct($build);
$person = $build->getPerson();
$person->show();