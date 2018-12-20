<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | 抽象使用者 AbstractProduct
 |--------------------------------------
 |
 |
 */


namespace Src\AbstractFactory\example;


interface IUser
{
    /**
     * 新增一條資料
     * @param User $user
     * @return mixed
     */
    public function insert(User $user);

    /**
     * 取得使用者資料
     * @param $id: 資料id
     * @return mixed
     */
    public function getUser($id);
}