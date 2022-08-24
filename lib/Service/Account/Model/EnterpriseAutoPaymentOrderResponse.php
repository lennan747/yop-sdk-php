<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class EnterpriseAutoPaymentOrderResponse extends BaseResponse
{
    /**
     * @var EnterpriseAutoPaymentOrderAutoPaymentRespDtoResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\EnterpriseAutoPaymentOrderAutoPaymentRespDtoResult';
    }

    /**
     * @param EnterpriseAutoPaymentOrderAutoPaymentRespDtoResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return EnterpriseAutoPaymentOrderAutoPaymentRespDtoResult
     */
    function getResult()
    {
        return $this->result;
    }
}
