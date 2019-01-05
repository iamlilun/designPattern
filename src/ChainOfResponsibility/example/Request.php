<?php
declare(strict_types=1);
/*------------------------------------
 | 申請類別
 |------------------------------------
 |
 |
 |
 */

namespace Src\ChainOfResponsibility\example;


class Request
{
    /** @var : 申請類別 */
    private $requestType;

    /**
     * @return mixed
     */
    public function getRequestType()
    {
        return $this->requestType;
    }

    /**
     * @param mixed $requestType
     */
    public function setRequestType($requestType): void
    {
        $this->requestType = $requestType;
    }

    /** @var : 申請內容 */
    private $requestContent;

    /**
     * @return mixed
     */
    public function getRequestContent()
    {
        return $this->requestContent;
    }

    /**
     * @param mixed $requestContent
     */
    public function setRequestContent($requestContent): void
    {
        $this->requestContent = $requestContent;
    }

    /** @var : 數量 */
    private $number;

    /**
     * @return mixed
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param mixed $number
     */
    public function setNumber($number): void
    {
        $this->number = $number;
    }

}