<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | Observer 抽象觀察者
 |--------------------------------------
 |
 |
 */


namespace Src\Observer\example;


abstract class Observer
{
    protected $name;
    protected $secretary;

    public function __construct($name, ISubject $secretary)
    {
        $this->name = $name;
        $this->secretary = $secretary;
    }

    abstract public function update();
}