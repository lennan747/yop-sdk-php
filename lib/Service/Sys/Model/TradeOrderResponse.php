<?php


namespace Yeepay\Yop\Sdk\Service\Sys\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class TradeOrderResponse extends BaseResponse
{
    /**
     * @var TradeOrderYopCreateOrderResDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Sys\Model\TradeOrderYopCreateOrderResDTOResult';
    }

    /**
     * @param TradeOrderYopCreateOrderResDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return TradeOrderYopCreateOrderResDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
