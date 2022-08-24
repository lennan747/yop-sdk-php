<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class RechargeOrderResponse extends BaseResponse
{
    /**
     * @var RechargeOrderRechargeApiRespDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\RechargeOrderRechargeApiRespDTOResult';
    }

    /**
     * @param RechargeOrderRechargeApiRespDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return RechargeOrderRechargeApiRespDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
