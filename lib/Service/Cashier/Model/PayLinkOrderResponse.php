<?php


namespace Yeepay\Yop\Sdk\Service\Cashier\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class PayLinkOrderResponse extends BaseResponse
{
    /**
     * @var PayLinkOrderAggregationPayLinkResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Cashier\Model\PayLinkOrderAggregationPayLinkResponseDTOResult';
    }

    /**
     * @param PayLinkOrderAggregationPayLinkResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return PayLinkOrderAggregationPayLinkResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
