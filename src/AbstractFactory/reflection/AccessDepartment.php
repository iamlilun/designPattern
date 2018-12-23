<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | Access操作部問資料表 ProductB1
 |--------------------------------------
 |
 |
 */


namespace Src\AbstractFactory\Reflection;


class AccessDepartment
{

    /**
     * 新增一條資料
     * @param Department $department
     * @return void
     */
    public function insert(Department $department)
    {
        echo "在Access中給department表增加一條記錄" . PHP_EOL;
    }

    /**
     * 取得部門資料
     * @param $id : 資料id
     * @return void
     */
    public function getDepartment($id)
    {
        echo "在Access中根據ID得到department表的一條記錄" . PHP_EOL;
    }
}