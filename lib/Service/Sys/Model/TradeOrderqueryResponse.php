<?php


namespace Yeepay\Yop\Sdk\Service\Sys\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class TradeOrderqueryResponse extends BaseResponse
{
    /**
     * @var TradeOrderqueryYopQueryOrderResDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Sys\Model\TradeOrderqueryYopQueryOrderResDTOResult';
    }

    /**
     * @param TradeOrderqueryYopQueryOrderResDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return TradeOrderqueryYopQueryOrderResDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
