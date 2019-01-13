<?php
declare(strict_types=1);
/*------------------------------------
 | 用戶端程式碼
 |------------------------------------
 |
 |
 |
 */
use Src\Flyweight\basic\ConcreteFlyweight;
use Src\Flyweight\basic\UnsharedConcreteFlyweight;
use Src\Flyweight\basic\FlyweightFactory;

require_once __DIR__ . '/../../../vendor/autoload.php';

$extrinsicstate = 22;

$factory = new FlyweightFactory();

$fx = $factory->getFlyweight("X");
$fx->operation(--$extrinsicstate);

$fy = $factory->getFlyweight("Y");
$fy->operation(--$extrinsicstate);

$fz = $factory->getFlyweight("Z");
$fz->operation(--$extrinsicstate);

$unshared = new UnsharedConcreteFlyweight();
$unshared->operation(--$extrinsicstate);