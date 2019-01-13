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
use Src\Flyweight\example\User;

require_once __DIR__ . '/../../../vendor/autoload.php';

$factory = new WebSiteFactory();

$x = $factory->getWebsiteCategory("產品展示");
$x->use(new User("小菜"));

$y = $factory->getWebsiteCategory("產品展示");
$y->use(new User("大鳥"));

$z = $factory->getWebsiteCategory("產品展示");
$z->use(new User("嬌嬌"));

$l = $factory->getWebsiteCategory("部落格");
$l->use(new User("丁丁"));

$m = $factory->getWebsiteCategory("部落格");
$m->use(new User("鐵雄"));

$n = $factory->getWebsiteCategory("部落格");
$n->use(new User("神樂"));

echo "網站分類總數為 {$factory->getWebSiteCount()}\n";