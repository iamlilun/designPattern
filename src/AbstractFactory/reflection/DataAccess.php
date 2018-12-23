<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | Factory
 |--------------------------------------
 |
 |
 */


namespace Src\AbstractFactory\Reflection;

class DataAccess
{
    private const db = "SqlServer";
    //private const db = "Access";

    /**
     * 用反射建立使用者實例
     * @return object
     * @throws \ReflectionException
     */
    public static function createUser()
    {
        $className = __NAMESPACE__ . '\\' . self::db . 'User'; //反射需要整個namespace
        try {
            $ref = new \ReflectionClass($className); //只是取回class名稱的反射
            return $ref->newInstanceArgs(); //一定要newInstanceArgs才能真的實例化
        } catch (\ReflectionException $e) {
            throw new \ReflectionException($e->getMessage());
        }
    }

    /**
     * 用反射建立部門實例
     * @return object
     * @throws \ReflectionException
     */
    public static function createDepartment()
    {
        $className = __NAMESPACE__ . '\\' . self::db . 'Department';
        try {
            $ref = new \ReflectionClass($className);
            return $ref->newInstanceArgs();
        } catch (\ReflectionException $e) {
            throw new \ReflectionException($e->getMessage());
        }
    }

}