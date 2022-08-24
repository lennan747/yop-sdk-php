<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class EnterpriseAutoPaymentQueryResponse extends BaseResponse
{
    /**
     * @var EnterpriseAutoPaymentQueryAutoPaymentQueryRespDtoResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\EnterpriseAutoPaymentQueryAutoPaymentQueryRespDtoResult';
    }

    /**
     * @param EnterpriseAutoPaymentQueryAutoPaymentQueryRespDtoResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return EnterpriseAutoPaymentQueryAutoPaymentQueryRespDtoResult
     */
    function getResult()
    {
        return $this->result;
    }
}
