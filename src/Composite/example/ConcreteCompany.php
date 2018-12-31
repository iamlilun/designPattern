<?php
declare(strict_types=1);
/*------------------------------------
 | 具體公司類別 Composite
 |------------------------------------
 |
 |
 |
 */

namespace Src\Composite\example;


class ConcreteCompany extends Company
{

    private $children = [];

    public function add(Company $company)
    {
        $this->children[] = $company;
    }

    public function remove(Company $company)
    {
        $key = array_search($company, $this->children);
        if($company === $this->children[$key]){
            unset($this->children[$key]);
        }
    }

    public function display(int $depth)
    {
        echo $this->turnString('-', $depth) . $this->name . PHP_EOL;

        foreach($this->children as $company){
            $company->display($depth + 2);
        }
    }

    public function lineOfDuty()
    {
        foreach ($this->children as $company){
            $company->lineOfDuty();
        }
    }
}