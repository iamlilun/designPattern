<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | 用戶端程式碼
 |--------------------------------------
 | 拿掉抽象跟工廠，改用簡單工廠模式 + 反射
 |
 */

use Src\AbstractFactory\Reflection\Department;
use Src\AbstractFactory\Reflection\User;
use Src\AbstractFactory\Reflection\DataAccess;

require_once __DIR__ . '/../../../vendor/autoload.php';

$user = new User();
$department = new Department();

$iUser = DataAccess::createUser();
$iUser->insert($user);
$iUser->getUser(1);

$iDepartment = DataAccess::createDepartment();
$iDepartment->insert($department);
$iDepartment->getDepartment(1);
