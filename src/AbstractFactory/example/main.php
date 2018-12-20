<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | 用戶端程式碼
 |--------------------------------------
 | 靈活的變換DB
 |
 */

use Src\AbstractFactory\example\AccessFactory;
use Src\AbstractFactory\example\Department;
use Src\AbstractFactory\example\User;
use Src\AbstractFactory\example\SqlServerFactory;

require_once __DIR__ . '/../../../vendor/autoload.php';

$user = new User();
$department = new Department();

//$factory = new SqlServerFactory();
$factory = new AccessFactory();

$iUser = $factory->createUser();
$iUser->insert($user);
$iUser->getUser(1);

$iDepartment = $factory->createDepartment();
$iDepartment->insert($department);
$iDepartment->getDepartment(1);
