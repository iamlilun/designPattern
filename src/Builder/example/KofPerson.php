<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | KOF 裡的人物角色
 |--------------------------------------
 |
 |
 */


namespace Src\Builder\example;


class KofPerson
{
    /** @var : 姓名 */
    public $name;

    /** @var : 性別 */
    public $sex;

    /** @var : 穿著 */
    public $wearing;

    /**
     * 顯示角色
     */
    public function show()
    {
        echo "創建角色-------------\n";
        echo $this->name . "\n";
        echo $this->sex . "\n";
        echo $this->wearing  . "\n";
    }
}