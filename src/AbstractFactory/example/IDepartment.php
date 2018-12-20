<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | 抽象部門 AbstractProductB
 |--------------------------------------
 |
 |
 */


namespace Src\AbstractFactory\example;


interface IDepartment
{
    /**
     * 新增一條資料
     * @param Department $department
     * @return mixed
     */
    public function insert(Department $department);

    /**
     * 取得部門資料
     * @param $id: 資料id
     * @return mixed
     */
    public function getDepartment($id);
}