<?php
declare(strict_types=1);
/*------------------------------------
 | 用戶端程式碼
 |------------------------------------
 |
 |
 |
 */
use Src\Singleton\basic\Singleton;

require_once __DIR__ . '/../../../vendor/autoload.php';

$singleton1 = Singleton::getInstance();
$singleton2 = Singleton::getInstance();

if($singleton1 === $singleton2){
    echo "兩個物件是同一實體 \n";
}