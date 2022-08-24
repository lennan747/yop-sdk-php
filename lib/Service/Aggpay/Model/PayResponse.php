<?php


namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class PayResponse extends BaseResponse
{
    /**
     * @var PayPassiveOrderResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Aggpay\Model\PayPassiveOrderResponseDTOResult';
    }

    /**
     * @param PayPassiveOrderResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return PayPassiveOrderResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
