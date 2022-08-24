<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class RechargeResponse extends BaseResponse
{
    /**
     * @var RechargeRechargeApiV2ResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\RechargeRechargeApiV2ResponseDTOResult';
    }

    /**
     * @param RechargeRechargeApiV2ResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return RechargeRechargeApiV2ResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
