<?php
declare(strict_types=1);
/*------------------------------------
 | 聯合國安理會 ConcreteMediator
 |------------------------------------
 |
 |
 |
 */

namespace Src\Mediator\example;


class UnitedNationsSecurityCouncil extends UnitedNations
{
    private $usa;

    private $iraq;

    /**
     * @param mixed $usa
     */
    public function setUsa($usa): void
    {
        $this->usa = $usa;
    }

    /**
     * @param mixed $iraq
     */
    public function setIraq($iraq): void
    {
        $this->iraq = $iraq;
    }


    /**
     * 宣告
     * @param $message
     * @param Country $country
     * @return void
     */
    public function declare($message, Country $country): void
    {
        if($country == $this->usa){
            $this->iraq->getMessage($message);
        } else {
            $this->usa->getMessage($message);
        }
    }
}