<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class RechargeQueryResponse extends BaseResponse
{
    /**
     * @var RechargeQueryQueryRechargeResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\MWallet\Model\RechargeQueryQueryRechargeResponseDTOResult';
    }

    /**
     * @param RechargeQueryQueryRechargeResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return RechargeQueryQueryRechargeResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
