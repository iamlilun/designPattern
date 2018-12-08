<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | 履歷原型
 |--------------------------------------
 | ConcretePrototype
 | 淺複製：
 |    如果複製的物件中有參考別的物件，別的物件是不會被複製過來的,
 |    這個範例中..WorkExperience 無法被複製.
 */


namespace Src\Prototype\shallow;


class Resume
{
    private $name;
    private $sex;
    private $age;

    private $workExperience;

    /**
     * Resume constructor.
     * 設定姓名
     * @param $name : 姓名
     */
    public function __construct($name)
    {
        $this->name = $name;
        $this->workExperience = new WorkExperience();
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
        $this->workExperience->workDate = $timeArea;
        $this->workExperience->company = $company;
    }

    /**
     * 顯示
     */
    public function display()
    {
        echo "{$this->name} {$this->sex} {$this->age}\n";
        echo "工作經歷：{$this->workExperience->workDate} {$this->workExperience->company}\n";
    }

    /**
     * 複製自身的魔術方法
     */
    public function __clone()
    {

    }

}