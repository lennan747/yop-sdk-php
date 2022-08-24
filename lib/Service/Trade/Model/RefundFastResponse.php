<?php


namespace Yeepay\Yop\Sdk\Service\Trade\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class RefundFastResponse extends BaseResponse
{
    /**
     * @var RefundFastYopFastRefundResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Trade\Model\RefundFastYopFastRefundResponseDTOResult';
    }

    /**
     * @param RefundFastYopFastRefundResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return RefundFastYopFastRefundResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
