<?php
declare(strict_types=1);
/*------------------------------------
 | 人加資源部 Leaf
 |------------------------------------
 |
 |
 |
 */

namespace Src\Composite\example;


class HRDepartment extends Company
{

    public function add(Company $company)
    {
        echo "Cannot add to leaf\n";
    }

    public function remove(Company $company)
    {
        echo "Cannot remove to leaf\n";
    }

    /**
     * 顯示
     * @param int $depth : 組織深度
     * @return void
     */
    public function display(int $depth)
    {
        echo $this->turnString('-', $depth) . $this->name . PHP_EOL;
    }

    /**
     * 履行職責
     * @return void
     */
    public function lineOfDuty()
    {
        echo "{$this->name} 員工招聘教育訓練管理\n";
    }
}