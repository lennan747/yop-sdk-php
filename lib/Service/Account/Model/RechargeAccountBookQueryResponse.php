<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class RechargeAccountBookQueryResponse extends BaseResponse
{
    /**
     * @var RechargeAccountBookQueryRechargePageQueryResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\RechargeAccountBookQueryRechargePageQueryResponseDTOResult';
    }

    /**
     * @param RechargeAccountBookQueryRechargePageQueryResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return RechargeAccountBookQueryRechargePageQueryResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
