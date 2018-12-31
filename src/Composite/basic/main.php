<?php
declare(strict_types=1);
/*------------------------------------
 | 用戶端程式碼
 |------------------------------------
 | 透過Component介面操作組合零件
 |
 |
 */

use Src\Composite\basic\Composite;
use Src\Composite\basic\Leaf;

require_once __DIR__ . '/../../../vendor/autoload.php';

//產生數根root，根上長出兩葉LeafA 跟 LeafB
$root = new Composite("root");
$root->add(new Leaf("Leaf A"));
$root->add(new Leaf("Leaf B"));

//根上長出分支Composite X, 分支也開有兩葉 LeafXA LeafXB
$comp = new Composite("Composite X");
$comp->add(new Leaf("Leaf XA"));
$comp->add(new Leaf("Leaf XB"));

$root->add($comp); //把樹支裝到根上

//在Composite X上再長出分支XY，分支也開有兩葉 LeafXYA LeafXYB
$comp2 = new Composite("Composite X");
$comp2->add(new Leaf("Leaf XYA"));
$comp2->add(new Leaf("Leaf XYB"));

$comp->add($comp2); //把分支組裝

//根部又長了兩葉LeafC 跟 LeafD 可是D沒長牢被風吹走了
$root->add(new Leaf("Leaf C"));
$leaf = new Leaf("Leaf D");
$root->add($leaf);
$root->remove($leaf);

$root->display(1); //顯示大樹的樣子