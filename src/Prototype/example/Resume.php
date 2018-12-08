<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | 履歷原型
 |--------------------------------------
 | ConcretePrototype
 | 因為PHP有__clone的魔術方法，所以不須要Prototype.php
 |
 */


namespace Src\Prototype\example;


class Resume
{
    private $name;
    private $sex;
    private $age;
    private $timeArea;
    private $company;

    /**
     * Resume constructor.
     * 設定姓名
     * @param $name : 姓名
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * 設定個人資訊
     * @param $sex: 性別
     * @param $age: 年齡
     */
    public function setPersonalInfo($sex, $age)
    {
        $this->sex = $sex;
        $this->age = $age;
    }

    /**
     * 設定工作經歷
     * @param $timeArea
     * @param $company
     */
    public function setWorkExperience($timeArea, $company)
    {
        $this->timeArea = $timeArea;
        $this->company = $company;
    }

    /**
     * 顯示
     */
    public function display()
    {
        echo "{$this->name} {$this->sex} {$this->age}\n";
        echo "工作經歷：{$this->timeArea} {$this->company}\n";
    }

    /**
     * 複製自身的魔術方法
     */
    public function __clone()
    {

    }

}