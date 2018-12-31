<?php
declare(strict_types=1);
/*------------------------------------
 | 公司類別 Component
 |------------------------------------
 |
 |
 |
 */

namespace Src\Composite\example;


abstract class Company
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    abstract public function add(Company $company);

    abstract public function remove(Company $company);

    /**
     * 顯示
     * @param int $depth : 組織深度
     * @return void
     */
    abstract public function display(int $depth);

    /**
     * 履行職責
     * @return void
     */
    abstract public function lineOfDuty();

    /**
     * 將數字轉換成字串
     * @param string $str : 要轉換的字串
     * @param int $length : 字串長度
     * @return string
     */
    protected function turnString(string $str, int $length): string
    {
        $res = '';

        for ($i = 0; $i < $length; $i++) {
            $res .= $str;
        }

        return $res;
    }
}