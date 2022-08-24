<?php


namespace Yeepay\Yop\Sdk\Service\Settle\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class BalanceQueryResponse extends BaseResponse
{
    /**
     * @var BalanceQuerySelfSettleQueryResponseDtoResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Settle\Model\BalanceQuerySelfSettleQueryResponseDtoResult';
    }

    /**
     * @param BalanceQuerySelfSettleQueryResponseDtoResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BalanceQuerySelfSettleQueryResponseDtoResult
     */
    function getResult()
    {
        return $this->result;
    }
}
