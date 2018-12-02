<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | 具體的人 ConcreteComponent
 |--------------------------------------
 | 書上原文：
 | 如果只有一個ConcreteComponent而沒有抽象的Component類別，
 | 那麼Decorator可以是ConcreteComponent的一個子類別，
 | 同理如果只有一個ComponentDecorator，那就沒必要建立一個單獨的Decorator
 | 可以把Decorator和ComponentDecorator的責任合併成一個類別
 | ------------------------
 | 自己理解的翻譯：
 | 如果要被裝飾的物件只有一個(例如一個人或是一本書），那沒必要為他做個抽象的Component
 | 而Decorator就直接改繼承ConcreteComponent就行
 | 如果用來裝飾的物件(ComponentDecorator)屬性是單一的(例如只是單純裝飾人的穿著，而不是衣服加上姓格外掛寵物)，
 | 那沒必要為他做個抽象的Decorator
 |
 */


namespace Src\Decorator\example;


class Person
{
    /** @var : 人的姓名 */
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function show() :void
    {
        echo "裝扮的{$this->name}\n";
    }
}