<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | 用Sql Server操作部問資料 ProductA1
 |--------------------------------------
 |
 |
 */


namespace Src\AbstractFactory\Reflection;


class SqlServerDepartment
{

    /**
     * 新增一條資料
     * @param Department $department
     * @return void
     */
    public function insert(Department $department)
    {
        echo "在SQL Server中給department表增加一條記錄" . PHP_EOL;
    }

    /**
     * 取得部門資料
     * @param $id : 資料id
     * @return void
     */
    public function getDepartment($id)
    {
        echo "在SQL Server中根據ID得到department表的一條記錄" . PHP_EOL;
    }
}