<?php


namespace Yeepay\Yop\Sdk\Service\Sys\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class TradeRefundResponse extends BaseResponse
{
    /**
     * @var TradeRefundResponseRefundDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Sys\Model\TradeRefundResponseRefundDTOResult';
    }

    /**
     * @param TradeRefundResponseRefundDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return TradeRefundResponseRefundDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
