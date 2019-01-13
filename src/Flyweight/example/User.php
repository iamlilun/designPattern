<?php
declare(strict_types=1);
/*------------------------------------
 | 用戶類別
 |------------------------------------
 | 用於網站的客戶帳號，是網站類別的外部狀態
 |
 |
 */

namespace Src\Flyweight\example;


class User
{
    private $name;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}