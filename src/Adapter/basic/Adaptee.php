<?php
declare(strict_types=1);
/*-------------------------------
 | Adaptee 需要轉接的類別
 |-------------------------------
 |
 |
 |
 */



namespace Src\Adapter\basic;


class Adaptee
{
    public function specificRequest()
    {
        echo "特殊請求!\n";
    }
}