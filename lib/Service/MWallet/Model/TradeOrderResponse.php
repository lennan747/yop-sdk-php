<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class TradeOrderResponse extends BaseResponse
{
    /**
     * @var TradeOrderMemberTradOrderRespResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\MWallet\Model\TradeOrderMemberTradOrderRespResult';
    }

    /**
     * @param TradeOrderMemberTradOrderRespResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return TradeOrderMemberTradOrderRespResult
     */
    function getResult()
    {
        return $this->result;
    }
}
