<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | Concrete builder 建立草薙京
 |--------------------------------------
 |
 |
 */


namespace Src\Builder\example;


class Kyo extends Builder
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
        $this->kofPerson->name = '草薙京';
    }

    /**
     * 設定性別
     */
    public function setSex()
    {
       $this->kofPerson->sex = '男';
    }

    /**
     * 設定穿著
     */
    public function setWearing()
    {
        $this->kofPerson->wearing = '全身黑';
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