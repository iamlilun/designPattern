<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | Concrete builder 建立不知火舞
 |--------------------------------------
 |
 |
 */


namespace Src\Builder\example;


class Mai extends Builder
{

    public $kofPerson;

    public function __construct()
    {
        $this->kofPerson = new KofPerson();
    }

    /**
     * 設定姓名
     */
    public function setName()
    {
        $this->kofPerson->name = '不知火舞';
    }

    /**
     * 設定性別
     */
    public function setSex()
    {
       $this->kofPerson->sex = '女';
    }

    /**
     * 設定穿著
     */
    public function setWearing()
    {
        $this->kofPerson->wearing = '全身紅';
    }

    /**
     * 取得結果
     * @return KofPerson
     */
    public function getPerson()
    {
        return $this->kofPerson;
    }
}