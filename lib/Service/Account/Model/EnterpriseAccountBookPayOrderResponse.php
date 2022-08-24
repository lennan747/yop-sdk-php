<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class EnterpriseAccountBookPayOrderResponse extends BaseResponse
{
    /**
     * @var EnterpriseAccountBookPayOrderAccountBookPaymentRespDtoResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\EnterpriseAccountBookPayOrderAccountBookPaymentRespDtoResult';
    }

    /**
     * @param EnterpriseAccountBookPayOrderAccountBookPaymentRespDtoResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return EnterpriseAccountBookPayOrderAccountBookPaymentRespDtoResult
     */
    function getResult()
    {
        return $this->result;
    }
}
