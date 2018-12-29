<?php
declare(strict_types=1);
/*------------------------------
 | 目標
 |------------------------------
 | 可以是具體或抽象的類別，也可以是介面
 |
 |
 */

namespace Src\Adapter\basic;


class Target
{
    public function request()
    {
        echo "普通請求\n";
    }
}