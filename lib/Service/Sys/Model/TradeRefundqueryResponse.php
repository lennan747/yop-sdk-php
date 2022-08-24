<?php


namespace Yeepay\Yop\Sdk\Service\Sys\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class TradeRefundqueryResponse extends BaseResponse
{
    /**
     * @var TradeRefundqueryQueryRefundResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Sys\Model\TradeRefundqueryQueryRefundResponseDTOResult';
    }

    /**
     * @param TradeRefundqueryQueryRefundResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return TradeRefundqueryQueryRefundResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
