<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | 用戶端程式碼
 |--------------------------------------
 |
 |
 */

use Src\Observer\basic\ConcreteObserver;
use Src\Observer\basic\ConcreteSubject;

require_once __DIR__ . '/../../../vendor/autoload.php';

//實例化被觀查者
$concreteSubject = new ConcreteSubject();

$concreteSubject->attach(new ConcreteObserver($concreteSubject, 'X')); //增加觀查者X
$concreteSubject->attach(new ConcreteObserver($concreteSubject, 'Y')); //增加觀查者Y
$concreteSubject->attach(new ConcreteObserver($concreteSubject, 'Z')); //增加觀查者Z

$concreteSubject->subjectStatus = "ABC";
$concreteSubject->notify();