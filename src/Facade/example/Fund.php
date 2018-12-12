<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | 基金 Facade
 |--------------------------------------
 |
 |
 */


namespace Src\Facade\example;

use Src\Facade\example\NationalDebt;
use Src\Facade\example\Realty;
use Src\Facade\example\StockA;
use Src\Facade\example\StockB;
use Src\Facade\example\StockC;

class Fund
{
    private $nationalDebt;
    private $realty;
    private $stockA;
    private $stockB;
    private $stockC;

    public function __construct()
    {
        $this->nationalDebt = new NationalDebt();
        $this->realty = new Realty();
        $this->stockA = new StockA();
        $this->stockB = new StockB();
        $this->stockC = new StockC();
    }

    public function buyFund()
    {
        $this->stockA->buy();
        $this->stockB->buy();
        $this->stockC->buy();
        $this->nationalDebt->buy();
        $this->realty->buy();
    }

    public function sellFund()
    {
        $this->stockA->sell();
        $this->stockB->sell();
        $this->stockC->sell();
        $this->nationalDebt->sell();
        $this->realty->sell();
    }
}