<?php
declare(strict_types=1);
/*------------------------------------
 | 管理者類別 Handler
 |------------------------------------
 |
 |
 |
 */

namespace Src\ChainOfResponsibility\example;


abstract class Manager
{
    protected $name;

    //管理者上級
    protected $superior;

    /**
     * 設定使用者的上級
     * @param mixed $superior
     */
    public function setSuperior(Manager $superior): void
    {
        $this->superior = $superior;
    }

    public function __construct($name)
    {
        $this->name = $name;
    }


    abstract public function requestApplications(Request $request);

}