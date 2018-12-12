<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | Facade
 |--------------------------------------
 |
 |
 */


namespace Src\Facade\basic;

use Src\Facade\basic\SubSystemOne;
use Src\Facade\basic\SubSystemTwo;
use Src\Facade\basic\SubSystemThree;
use Src\Facade\basic\SubSystemFour;

class Facade
{
    private $subSystemOne;
    private $subSystemTwo;
    private $subSystemThree;
    private $subSystemFour;

    public function __construct()
    {
        $this->subSystemOne = new SubSystemOne();
        $this->subSystemTwo = new SubSystemTwo();
        $this->subSystemThree = new SubSystemThree();
        $this->subSystemFour = new SubSystemFour();
    }

    public function methodA()
    {
        echo "方法組A----------------\n";
        $this->subSystemOne->methodOne();
        $this->subSystemTwo->methodTwo();
        $this->subSystemFour->methodFour();
    }

    public function methodB()
    {
        echo "方法組B---------------\n";
        $this->subSystemOne->methodOne();
        $this->subSystemTwo->methodTwo();
    }
}