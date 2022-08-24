<?php


namespace Yeepay\Yop\Sdk\Service\Divide\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class DivideResponse extends BaseResponse
{
    /**
     * @var DivideYopOrderDivideResDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Divide\Model\DivideYopOrderDivideResDTOResult';
    }

    /**
     * @param DivideYopOrderDivideResDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return DivideYopOrderDivideResDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
