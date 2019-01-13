<?php
declare(strict_types=1);
/*------------------------------------
 | 網站共用程式碼 用戶端程式碼
 |------------------------------------
 |
 |
 |
 */
use Src\Flyweight\example\WebSiteFactory;

require_once __DIR__ . '/../../../vendor/autoload.php';

$factory = new WebSiteFactory();

$x = $factory->getWebsiteCategory("產品展示");
$x->use();

$y = $factory->getWebsiteCategory("產品展示");
$y->use();

$z = $factory->getWebsiteCategory("產品展示");
$z->use();

$l = $factory->getWebsiteCategory("部落格");
$l->use();

$m = $factory->getWebsiteCategory("部落格");
$m->use();

$n = $factory->getWebsiteCategory("部落格");
$n->use();

echo "網站分類總數為 {$factory->getWebSiteCount()}\n";