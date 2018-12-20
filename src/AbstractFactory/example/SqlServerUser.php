<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | 用SQL Server操作使用者資料 ProductA2
 |--------------------------------------
 |
 |
 */


namespace Src\AbstractFactory\example;


class SqlServerUser implements IUser
{

    /**
     * 新增一條資料
     * @param User $user
     * @return void
     */
    public function insert(User $user)
    {
        echo "在SQL Server中給users表增加一條記錄" . PHP_EOL;
    }

    /**
     * 取得使用者資料
     * @param $id : 資料id
     * @return void
     */
    public function getUser($id)
    {
        echo "在SQL Server中根據ID得到users表的一條記錄" . PHP_EOL;
    }
}